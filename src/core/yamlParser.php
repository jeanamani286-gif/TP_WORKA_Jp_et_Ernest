<?php

namespace Wonka\Core;

use RuntimeException;

/**
 * Parseur YAML minimal : mappings, listes, scalaires et blocs de texte (| et >).
 * Suffisant pour les fichiers de configuration et les fiches produit du projet.
 */
final class YamlParser
{
    private $lines = array();
    private $index = 0;

    public static function parseFile($path)
    {
        if (!is_file($path) || !is_readable($path)) {
            throw new RuntimeException('Fichier YAML introuvable ou illisible : ' . $path);
        }
        return self::parse(file_get_contents($path));
    }

    public static function parse($text)
    {
        $parser = new self();
        $parser->tokenize($text);
        if (!$parser->lines) {
            return array();
        }
        $value = $parser->parseNode($parser->lines[0]['indent']);
        if ($parser->index < count($parser->lines)) {
            throw new RuntimeException('Indentation YAML invalide à la ligne ' . $parser->lines[$parser->index]['number'] . '.');
        }
        return $value;
    }

    private function tokenize($text)
    {
        foreach (preg_split('/\r\n|\r|\n/', (string) $text) as $number => $raw) {
            $content = rtrim($raw);
            $indent = strspn($content, ' ');
            $body = substr($content, $indent);
            if ($body === '' || $body[0] === '#' || $body === '---') {
                continue;
            }
            if (strpos(substr($content, 0, $indent), "\t") !== false) {
                throw new RuntimeException('Les tabulations ne sont pas autorisées en YAML (ligne ' . ($number + 1) . ').');
            }
            $this->lines[] = array('indent' => $indent, 'text' => $body, 'number' => $number + 1, 'raw' => $raw);
        }
    }

    private function current()
    {
        return $this->index < count($this->lines) ? $this->lines[$this->index] : null;
    }

    private function parseNode($indent)
    {
        $line = $this->current();
        if ($line === null) {
            return null;
        }
        if (preg_match('/^-(\s|$)/', $line['text'])) {
            return $this->parseSequence($indent);
        }
        return $this->parseMapping($indent);
    }

    private function parseMapping($indent)
    {
        $result = array();
        while (($line = $this->current()) !== null) {
            if ($line['indent'] < $indent) {
                break;
            }
            if ($line['indent'] > $indent) {
                throw new RuntimeException('Indentation YAML inattendue à la ligne ' . $line['number'] . '.');
            }
            if (!preg_match('/^("(?:[^"\\\\]|\\\\.)*"|\'(?:[^\']|\'\')*\'|[^\s#"\'\[{][^:#]*?)\s*:(?:\s+(.*))?$/', $line['text'], $m)) {
                throw new RuntimeException('Syntaxe YAML invalide à la ligne ' . $line['number'] . ' : ' . $line['text']);
            }
            $key = $this->scalar(trim($m[1]));
            $rest = isset($m[2]) ? trim($m[2]) : '';
            $this->index++;
            $result[$key] = $this->parseValue($rest, $indent, $line);
        }
        return $result;
    }

    private function parseSequence($indent)
    {
        $result = array();
        while (($line = $this->current()) !== null) {
            if ($line['indent'] < $indent) {
                break;
            }
            if ($line['indent'] > $indent || !preg_match('/^-(?:\s+(.*))?$/', $line['text'], $m)) {
                throw new RuntimeException('Élément de liste YAML attendu à la ligne ' . $line['number'] . '.');