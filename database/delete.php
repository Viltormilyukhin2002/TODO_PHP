<?php
require_once 'connection.php';
$id = $_GET['id'];
function deleteTask($table, $id){
    global $pdo;
    $query = $pdo->prepare("DELETE FROM $table WHERE id= :id");
    $query->execute(['id' => $id]);
    header('Location: /');
}

deleteTask('tasks', $id);
?>
