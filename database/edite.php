<?php
require_once 'connection.php';

function editeTask($table, $id, $task){
    global $pdo;
    $query = $pdo->prepare("UPDATE $table SET task = :task WHERE id = :id");
    $query->execute(['task' => $task, 'id' => $id]);
    header('Location: /');
}

editeTask('tasks', $_POST['id'], $_POST['edite-task']);

?>

