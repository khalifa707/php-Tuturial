<?php
$str = "Hello world!";

echo strlen($str). "<br>" ;
echo strtoupper($str). "<br>";
echo strtolower($str). "<br>";

$pos = strpos($str, "world");

if ($pos !== false){
    echo $pos. "<br>";
}