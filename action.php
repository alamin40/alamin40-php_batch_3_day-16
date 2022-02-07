<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Product;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'product')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['pages'] == 'detail')
    {

        $product = new Product();
        $result = $product->getProductById($_GET['id']);
        include 'pages/detail.php';
    }
}
