<?php 

require_once __DIR__ . '/../classes/Database.php';

$success = false; 

if(isset($_POST['id'])){
    $task_id = $_POST['id'];
        
    $db = new Database();

    $success = $db->delete_task_by_id($task_id);

}
//if ($success) {
    // header("Location: /todo-list/pages/insert-task.php");
// } else {
 //   echo "Error deleting task";
// }

?>
<?php
if($success){
    ?>
<script type="text/javascript">
        alert("Data Deleted Successfully");
        window.open("http://localhost:8888/todo-list/pages/insert-task.php", "_self");
</script>
<?php
}else{
    ?>
    <script type="text/javascript">
        alert("Please try again");
</script>
<?php
}

?>

