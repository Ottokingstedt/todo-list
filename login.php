<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/style.php">
</head>

<body>
    
    <form class="box" action="/todo-list/scripts/post-login.php" method="post">

    <h1>Login</h1>
        <input type="text" name="username" placeholder="Username"> <br>
        <input type="password" name="password" placeholder="Password"> <br>
        <input type="submit" value="Login">
        <nav class="home">
    <a href="/todo-list">Home</a>
</nav>
    </form>
</body>

</html>