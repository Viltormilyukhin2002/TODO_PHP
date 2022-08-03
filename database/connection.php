<?php
$host = '127.0.0.1';
$dbname = 'todo';
$user = 'root';
$pass = 'root';

try{
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}catch(PDOException $e){
    die($e->getMessage());
}

function debug($test){
    echo '<pre>';
    print_r($test);
    echo '</pre>';
}