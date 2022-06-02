

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register user</title>
    <link rel="stylesheet" href="/todo-list/assets/style.php">
</head>
<body>
<section class="box">
    <form class="box2" action="/todo-list/scripts/post-register-user.php" method="post">

    <h1>Register user</h1>
        <input type="text" name="username" placeholder="Username"> <br>
        <input type="password" name="password" placeholder="Password"> <br>
        <input type="submit" value="Register">
        <nav class="home">
    <a href="/todo-list/index.php">Home</a>
</nav>
    </form>
  
</section>

</body>
</html>