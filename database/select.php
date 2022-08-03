<?php
require_once 'connection.php';

function selectAll($table){
     global $pdo;
     $query = $pdo->prepare("SELECT * FROM $table");
     $query->execute();
     return $query->fetchAll(PDO::FETCH_ASSOC);
}
$lists = selectAll('tasks');

function selectOne($table, $id){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM $table WHERE id = :id ");
    $query->execute(['id' => $id]);
    return $query->fetch(PDO::FETCH_ASSOC);
}

