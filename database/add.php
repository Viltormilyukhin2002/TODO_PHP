<?php
require_once 'connection.php';
function insertTask($table, $task){
    global $pdo;
    $query = $pdo->prepare("INSERT INTO $table (task) VALUES (:task)");
    $query->execute(['task' => $task]);
    header('Location: /');
}

$task = $_POST['task'];
insertTask('tasks', $task);