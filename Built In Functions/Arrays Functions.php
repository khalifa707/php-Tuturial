<?php
$fruits = ["Apple", "Banana", "Orange"];
$vegetables = ["cucumbers", "Tomatoes", "Lemon"];
array_push($fruits, "Mango", "Grapes");
print_r($fruits);

$merge = array_merge($vegetables, $fruits);
print_r($merge);
