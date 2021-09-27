<?php

$generate = $app['database']->collectAll('products');
$tableTotal =  sumTotal($generate);
require 'views/index.view.php'; 