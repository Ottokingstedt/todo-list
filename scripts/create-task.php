<?php

require_once __DIR__ . "/../classes/Database.php";
require_once __DIR__ . "/../classes/Task.php";

session_start();

$success = false; 

if(isset($_POST["title"]) && isset($_SESSION["user"])){
    $task_title = $_POST["title"];

    $user = $_SESSION["user"];

    $current_date = date("Y-m-d");

    $task = new Task($task_title, $current_date, $user->id);

    $db = new Database();

    $success = $db->save_todo($task);
}else{
    echo "Invalid input";
}

if ($success) {
    header("Location: /todo-list/pages/insert-task.php");
} else {
    echo "Error saving Todo to database";
    
}
