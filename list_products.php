<?php
// list_products.php
require_once "bootstrap.php";

$productRepository = $entityManager->getRepository('HTL3R\doctrineorm\Product');
$products = $productRepository->findAll();

foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
}