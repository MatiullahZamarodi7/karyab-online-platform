<?php

global $conn;

$serverName = "localhost";
$userName = "root";
$password = "";


try{
    $options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION , PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ];
    $conn = new PDO("mysql:host=$serverName;dbname=karyab", $userName, $password, $options);
    return $conn;
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

function printArray($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}