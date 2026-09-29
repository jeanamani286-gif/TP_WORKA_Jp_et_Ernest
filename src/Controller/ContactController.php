<?php

namespace Wonka\Controller;

use Wonka\Core\Request;

class ContactController extends BaseController
{
    public function show(Request $request)
    {
        return $this->render($request, 'page/contact', array('sent' => false, 'errors' => array()), $this->config->page('contact'));
    }

    public function submit(Request $request)
    {
        $errors = array();
        foreach (array('nom', 'email', 'message') as $field) {
            if (trim((string) $request->post($field, '')) === '') {
                $errors[$field] = 'Ce champ est obligatoire.';
            }
        }
        if (!isset($errors['email']) && !filter_var($request->post('email'), FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Adresse e-mail invalide.';
        }

        $data = array(
            'sent' => !$errors,
            'errors' => $errors,
            'values' => array(
                'nom' => (string) $request->post('nom', ''),
                'email' => (string) $request->post('email', ''),
                'sujet' => (string) $request->post('sujet', ''),
                'message' => (string) $request->post('message', ''),
            ),
        );
        $page = $this->config->page('contact');
        $page['cache_control'] = 'no-store';
        return $this->render($request, 'page/contact', $data, $page, $errors ? 422 : 200);
    }
}