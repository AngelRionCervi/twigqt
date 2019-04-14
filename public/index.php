<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

$loader  = new Twig_Loader_Filesystem('../src/View');

$twig = new Twig_Environment($loader, [
	'cache' => false
]);

echo $twig->render('index.html.twig', ['products' => $products, 'title' => 'home']);
