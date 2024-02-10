<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Connect to phpmyadmin database
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if (!$connection) {
        die("DB Connection Failed <br>");
    }
