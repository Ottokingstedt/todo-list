<?php

require_once __DIR__ . "/../classes/Database.php";
require_once __DIR__ . "/../classes/User.php";
require_once __DIR__ . "/../classes/Task.php";


$task_id = $_GET['id'];

$db = new Database();

$task = $db->get_task_by_id($task_id);

//if (!$is_logged_in || $task['user'] != $user->id) {
    //die("Error!");}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.php">       

    <title>Show task</title>

    <link rel="stylesheet" href="/../assets/style.css">
</head>

<body>
<nav>
        <a href="/todo-list/pages/insert-task.php">Back to tasks</a>
    </nav>
    <section class="box">
    <h1>Show task</h1>
    <p>
        <b>Title:</b>
        <?= $task->title ?>
    </p>

    <p>
        <b>Date:</b>
        <?= $task->date ?>
    </p>

    <p>
    <a href="/todo-list/pages/edit-task.php?id=<?= $task->id ?>">Edit task</a>
</p>

<form action="/todo-list/scripts/delete-task.php" method="post">
        <input type="hidden" name="id" value="<?= $task->id ?>">
        <input type="submit" value="Delete">
    </form>
    </section>

</body>

</html>
  