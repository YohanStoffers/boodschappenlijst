<?php


$router->get('','controllers/index.php');
$router->get('create','controllers/create.php');
$router->get('addProduct','controllers/addProduct.php');
$router->post('productsAdded','controllers/productsAdded.php');
