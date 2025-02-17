<?php
$person = [
    "name" => "Khalifa",
    "age" => 22,
    "gender" => "Male"
];
echo $person["name"] . "<br>";
$person ["Job"]="Developer";

foreach ($person as $key => $value) {
    echo $key . ": " . $value . "<br>";
}