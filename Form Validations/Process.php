<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    echo $username . "<br>";
    echo $password . "<br>";
}
