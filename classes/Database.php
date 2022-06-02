<?php 
require_once __DIR__ . "/Task.php";
require_once __DIR__ . "/User.php";

class Database {

    private $host = "localhost";
    private $user = "root";
    private $pass = "root";
    private $db = "todo-db";


private $conn;

public function __construct(){

    $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

    if (!$this->conn){
        die("Error connection to db!");
    }
}

//------------------- create a task -------------------------\\

public function save_todo(Task $task){
    $query = "INSERT INTO tasks (`title`, `date`, `user_id`) VALUES (?, ?, ?)"; 

    $stmt = mysqli_prepare($this->conn, $query);

    $stmt ->bind_param("ssi", $task->title, $task->date, $task->user_id);

    $success = $stmt->execute();

    if(!$success){
        var_dump($stmt->error);
        die();
    }

    return $success;
}

//------------------- get all tasks -------------------------\\

public function get_all_tasks(){
    $query = "SELECT * FROM tasks";

    $result = mysqli_query($this->conn, $query) or die("Select query failed");

    $db_tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $tasks = [];

    foreach($db_tasks as $db_task){
        $title = $db_task["title"];
        $date = $db_task["date"];
        $user_id = $db_task["user_id"];
        $id = $db_task["id"];

        $tasks[]= new Task ($title, $date, $id, $user_id);

        //sleep(1);
    }
    return $tasks;
}

//------------------- get single task ID -------------------------\\

public function get_task_by_id($id){
    $query = "SELECT * FROM `tasks` WHERE id = ?";

    $stmt = mysqli_prepare($this->conn, $query);

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $result = $stmt->get_result();

    $db_task = mysqli_fetch_assoc($result);

    $task = new Task($db_task['title'], $db_task['date'], $db_task["user_id"], $db_task["id"]);

    return $task; 
}


//------------------- Delete task ID -------------------------\\

public function delete_task_by_id($id){
    
    $query = "DELETE FROM tasks WHERE id= ?";

    $stmt= mysqli_prepare($this->conn, $query);

    $stmt->bind_param("i", $id);
    
    $success = $stmt->execute();

    return $success;

    }
//------------------- Update task  --------------------------\\

public function update_task(Task $task, $id){
    $query = "UPDATE tasks SET title = ?, `date` = ?, `user_id` = ? WHERE id = ?";

    $stmt = mysqli_prepare($this->conn, $query);

    $stmt->bind_param("ssii", $task->title, $task->date, $task->user_id, $id);

    $success = $stmt->execute();

    return $success;

}


//------------------- Create User ID -------------------------\\

    public function save_user(User $user){
        
            $query = "INSERT INTO users (username, `password-hash`) VALUES (?, ?)";
    
            $stmt = mysqli_prepare($this->conn, $query);
    
            $username = $user->username;
            $password_hash = $user->get_password_hash();
    
            $stmt->bind_param("ss", $username, $password_hash);
    
            $success = $stmt->execute();
    
            return $success;
        }
    
    public function get_user_by_username($username)
        {
            $query = "SELECT * FROM users WHERE username = ?";
    
            $stmt = mysqli_prepare($this->conn, $query);
    
            $stmt->bind_param("s", $username);
    
            $stmt->execute();
    
            $result = $stmt->get_result();
    
            $db_user = mysqli_fetch_assoc($result);
    
            $user = null;
    
            if ($db_user) {
                $user = new User($username, $db_user["id"]);
                $user->set_password_hash($db_user["password-hash"]);
            }
    
            return $user;
        }

        public function get_google_user_id(User $user){
            // 1. Kolla om användaren finns
            $db_user = $this->get_user_by_username($user->username);
    
    
            // 2. om inte, skapa användaren
            if($db_user == null){
                $query = "INSERT INTO users (username) VALUES (?)";
    
                $stmt = mysqli_prepare($this->conn, $query);
        
                $username = $user->username;
        
                $stmt->bind_param("s", $username);
        
                $success = $stmt->execute();
    
                if($success){
                    $user->id = $stmt->insert_id;
                }
                else{
                    var_dump($stmt->error);
                    die("Error saving google user");
                }
    
            }
            else{
                $user = $db_user;
            }
    
            // 3. Skicka tillbaka ID
            return $user->id;
        }
        public function get_task_by_user_id($user_id){
            $query = "SELECT * FROM tasks WHERE `user_id` = ?";

            $stmt = mysqli_prepare($this->conn, $query);

            $stmt->bind_param("i", $user_id);

            $stmt->execute();

            $result = $stmt->get_result();

            $db_tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $tasks = [];

            foreach ($db_tasks as $db_task){
                $db_task_id = (int)$db_task['id'];
                $db_task_user_id = (int)$db_task['user_id'];
                $db_task_title = $db_task['title'];
                $db_task_date = $db_task['date'];
          
            $task = new Task (
                $db_task_title,
                $db_task_date,
                $db_task_user_id,
                $db_task_id
            );

            $tasks[] = $task;
        };
            
            return $tasks;
        }
    }

