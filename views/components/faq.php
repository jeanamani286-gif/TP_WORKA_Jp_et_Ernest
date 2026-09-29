<?php
/** Liste de questions/réponses : `$items` = liste de {question, answer (HTML), open?}. */
foreach ($items as $index => $item): ?>
      <details<?= !empty($item['open']) || (empty($noAutoOpen) && $index === 0) ? ' open' : '' ?>>
        <summary><?= $view->e($item['question']) ?></summary>
        <p><?= $item['answer'] ?></p>
      </details>
<?php endforeach; ?>