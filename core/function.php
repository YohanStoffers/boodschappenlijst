<?php

function sumTotal($table){
    $total = 0;
    foreach($table as $sum){
        $total += $sum->price*$sum->number;
    }
    return $total;
}