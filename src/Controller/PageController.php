<?php

namespace Wonka\Controller;

use Wonka\Core\Request;

/** Pages « classiques » : une configuration YAML dans config/pages + une vue dans views/page. */
class PageController extends BaseController
{
    public function show(Request $request, $name)
    {
        if (!$this->config->hasPage($name)) {
            return $this->notFound($request);
        }
        $page = $this->config->page($name);
        $template = isset($page['template']) ? $page['template'] : 'page/' . $name;
        if (strncmp($template, 'page/', 5) !== 0 || !$this->view->exists($template) || $name === 'not-found') {
            return $this->notFound($request);
        }
        return $this->render($request, $template, array(), $page);
    }
}