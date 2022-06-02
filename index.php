<?php 

require_once __DIR__ . "/../todo-list/classes/Database.php";
require_once __DIR__ . "/../todo-list/classes/Task.php";
require_once __DIR__ . "/../todo-list/classes/User.php";

//Include Google Configuration File
require_once __DIR__ . "/google-config.php";

$google_login_btn = '<a href="' . $google_client->createAuthUrl() . '">Login with Google</a>';

$db = new Database();

$user = $_SESSION["user"];

$tasks = $db->get_all_tasks($user);

$is_logged_in = (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>

    <link rel="stylesheet" href="./assets/style.php">
</head>

<body>

<section class="box">
    <div></div>
 <h1>Todo</h1>
<?php
$hash = password_hash("Otto", null);

$correct = password_verify("Otto", $hash); 
$incorrect = password_verify("133424", $hash);

//  var_dump($hash);
//  var_dump($correct, $incorrect);
?> 

<nav>

<?php if (!$is_logged_in) : ?>

    <a href="/todo-list/Pages/register-user.php">New register</a>
    <a href="/todo-list/login.php">Login</a>

    <?= $google_login_btn ?>


<?php endif; ?>

</nav>
<?php if ($is_logged_in) : ?>
        <h4>
            <b>Welcome Back </b>
            <?= $_SESSION["user"]->username ?>!
</h4>
        <form action="/todo-list/scripts/post-logout.php" method="post">
            <input type="submit" value="Logout"> <a href="/todo-list/pages/Insert-task.php">Visit Task</a>

    </form>


    <?php endif; ?> 
    </section>
    <script src="/todo-list/assets/script.js"></script>
    
</body>
</html>