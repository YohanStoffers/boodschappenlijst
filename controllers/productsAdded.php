<?php


$app['database']->insert('products',   [
    	'name'=>$_POST['productInput'],
        'number'=>$_POST['numberInput'],
        'price'=>$_POST['priceInput']
]);


header('Location: /');