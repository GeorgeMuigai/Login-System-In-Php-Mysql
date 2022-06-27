<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "login";

    $con = new mysqli($serverName, $userName, $password);

    $sql = "CREATE DATABASE IF NOT EXISTS login";
    $res = mysqli_query($con, $sql);

    if(!$res){
        die (mysqli_errno($con));
    }else{
        $con = new mysqli($serverName, $userName, $password, $dbName);
        $createTable = "CREATE TABLE IF NOT EXISTS users (id INT PRIMARY KEY AUTO_INCREMENT, name varchar(30), email varchar(255), uid varchar(40), passwordHash varchar(255))";
        $createTableResult = mysqli_query($con, $createTable);

        if(!$createTable){
            die (mysqli_errno($con));
        }
    }
?>