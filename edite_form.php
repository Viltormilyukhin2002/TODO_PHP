<?php
require_once 'database\connection.php';
require_once 'database\select.php';

$editor = selectOne('tasks', $_GET['edite']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO LIST</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="container-fluid">
<form action="/database/edite.php" method="post">
        <div class="mb-3">
            <input type="hidden" name="id" value="<?php echo $editor['id']?>">
            <label for="task" class="form-label">Edite task</label>
            <input type="text" name="edite-task" id="edite-task" value="<?php echo $editor['task']?>" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Edite task</button>
    </form>
</body>
</html>