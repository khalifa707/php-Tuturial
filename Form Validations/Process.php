<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars(trim($_POST['Username']));
    $password = htmlspecialchars(trim($_POST['Password']));

    if (!empty($username) && !empty($password)) {
        echo "Name:" . $username . "<br>";
        echo "Password:" . $password . "<br>";
    }else{
        echo "Fill in all fields";
    }

}
