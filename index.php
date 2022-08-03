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
<? require_once('database/select.php');?>
<div class="container window">
    <h1>Welcome to ToDo List App</h1>
    <form action="/database/add.php" method="post">
        <div class="mb-3">
            <label for="task" class="form-label">Task</label>
            <input type="text" name="task" id="task" placeholder="Feed the cat" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Add task</button>
    </form>
    <hr>
    <h2>Your Lists</h2>
    <div class="row task-lists-head">
        <div class="col col-md-9">
            Tasks
        </div>
        <div class="col-4 col-md-3">
            Action
        </div>
    </div>

    <?php foreach($lists as $k => $v){?>
        <div class="row task-lists-member">
        <div class="col col-md-9">
            <?php echo $v['task'] ?>
        </div>
        <div class="col-4 col-md-3">
           <a href="edite_form.php?edite=<?php echo $v['id']?>"><button type="button" class="btn btn-warning">Edite</button></a>
            <a href="database/delete.php?id=<?php echo $v['id']?>"><button type="button" name="btn-edite"  class="btn btn-danger" >Delite</button></a>
        </div>
    </div>
   <?php } ?>
</div>
</body>
</html>
