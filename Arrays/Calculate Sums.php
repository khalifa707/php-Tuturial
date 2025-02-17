<?php

$products = [
    ["name"=>"laptop", "price"=>1000, "stock"=>10],
    ["name"=>"Mouse", "price"=>50, "stock"=>20],
    ["name"=>"Keyboard", "price"=>100, "stock"=>15]
];

function calculateSums($products){
    $sum = 0;
    foreach ($products as $product) {
        $sum += $product["price"];
    }
    return $sum;
}
$totalSum = calculateSums($products);
echo "The Total Price is $".$totalSum;
