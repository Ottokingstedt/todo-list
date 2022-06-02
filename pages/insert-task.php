<?php 

require_once __DIR__ . "/../classes/Database.php";
require_once __DIR__ . "/../classes/Task.php";
require_once __DIR__ . "/../classes/User.php";

session_start();

$is_logged_in = (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]);

if (!$is_logged_in) {
    header("Location: /todo-list");
    die();
}

$db = new Database();

$user = $_SESSION["user"];

$tasks = $db->get_task_by_user_id($user->id);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
    <link rel="stylesheet" href="../assets/style.php">       
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<div class="wrapper">
    <header> 
      <div id="clockDiv">
        <h1 id="clock"></h1>
        <p id="date"></p>
      </div>
    </div>
    </header>
   
<form class="box2" action="/todo-list/scripts/create-task.php" method="post">
        <input type="text" name="title" placeholder="Title" class="form-control"><br>
        <input class="submit" type="submit" id="save" value="Save">
       <nav> <a href="/todo-list/index.php">Home</a></nav>
</form>

    <hr>
    <section>
        <ul>
        <?php foreach ($tasks as $task) : ?>
         
                <li><a href="/todo-list/pages/show-task.php?id=<?= $task->id ?>">
                        <?= $task ?> 
                </a>
                </li>
                
        <?php endforeach; ?> 
        </div>
    </section>

<script src="/todo-list/assets/todo.js"></script>
</body>
</html>