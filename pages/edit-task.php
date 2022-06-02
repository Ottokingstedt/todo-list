<?php 

require_once __DIR__ . '/../classes/Task.php';
require_once __DIR__ . '/../classes/Database.php';

$task_id = $_GET['id'];

$db = new Database();

$task = $db->get_task_by_id($task_id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Todo</title>
    <link rel="stylesheet" href="../assets/style.php">       
</head>
<body>

<nav>
    <a href="/todo-list">Home</a>
    <a href="/todo-list/pages/show-task.php?id=<?= $task->id ?>">Back to tasks</a>

</nav>

<form class="box" action="/todo-list/scripts/post-edit-task.php" method="post">
<h1>Edit Task</h1>
<input type="hidden" name="id" value="<?= $task->id ?>">
<input type="text" name="title" placeholder="Title" value="<?= $task->title ?>"><br>
<input type="submit" value="Save">
</form>
    
</body>
</html>