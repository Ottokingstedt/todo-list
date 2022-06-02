<?php 

require_once __DIR__ . '/../classes/Database.php';
require_once __DIR__ . '/../classes/Task.php';

$success = false;

session_start();


if (isset($_POST["title"]) && isset($_POST['id']) && isset($_SESSION['user'])){
    $task_title = $_POST["title"];
    $user = $_SESSION["user"];
    $task_id = $_POST['id'];

    $current_date = date("Y-m-d");

    $task = new Task($task_title, $current_date, $user->id);

    $db = new Database();

    $success = $db->update_task($task, $task_id);
}
else{
    echo "Invalid input";
}

if ($success) {
    header("Location: /todo-list/pages/show-task.php?id=".$_POST['id']);
} else {
    echo "Error saving Todo to database";
}
