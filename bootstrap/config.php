<?php

session_start();

$host = 'localhost';
$db = 'karyab';
$user = 'root';
$password = '';
$char = 'utf8mb4';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$char;", $user , $password);
//     echo "Connected!";
}catch(PDOException $e){
    echo "connection failed ===>" . $e->getMessage();
}

