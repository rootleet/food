<?php

//    $k = '12345';
//    echo password_hash($k , PASSWORD_DEFAULT);

    // connecton to our databse, we will use pdo
    // which is object oriented

    $host_name = 'localhost';
    $user = 'root';
    $password = 'Sunderland@411';
    $database = 'corner_inn';

    //set dsn
    $dsn = 'mysql:host='.$host_name.';dbname='.$database;

    //create object instance
    $route = new PDO($dsn, $user , $password);
    $route->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $route->setAttribute(PDO::ATTR_EMULATE_PREPARES , false);