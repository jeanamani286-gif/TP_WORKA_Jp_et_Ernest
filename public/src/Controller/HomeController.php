<?php

namespace Wonka\Controller;

use Wonka\Core\Config;
use Wonka\Core\Request;
use Wonka\Core\View;
use Wonka\Repository\ProductRepository;

class HomeController extends BaseController
{
    private $products;

    public function __construct(View $view, Config $config, ProductRepository $products)
    {
        parent::__construct($view, $config);
        $this->products = $products;
    }

    public function index(Request $request)
    {
        $page = $this->config->page('home');
        $featured = isset($page['featured']) ? (array) $page['featured'] : array();
        $products = array();
        foreach ($featured as $slug) {
            $product = $this->products->findBySlug($slug);
            if ($product !== null) {
                $products[] = $product;
            }
        }
        return $this->render($request, 'page/home', array('products' => $products), $page);
    }
}