<?php
    session_start();
    echo $_SESSION['login'];
?>
<?php
    echo $_COOKIE['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="design/style.css">

</head>
<body>
<div class="nav">
            <div class="text">
            
            <a href="http://localhost/Project/"><img src="img/download.png" alt="" width="30px" height="30px"></a>
                <h1><a href="http://localhost/Project/">Sport Academy</a></h1>
            </div>
            <ul>
                <li ><a href="http://localhost/Project/">Home</a></li>
                <li ><a href="http://localhost/Project/view.php">View</a></li>
                <li ><a href="">Objective</a></li>
                <li ><a href="">Motivation</a></li>
                <li ><a href="http://localhost/Project/insert.php">Register</a></li>
                <li ><a href="http://localhost/Project/login.php">Sign Up</a></li>
            </ul>
        </div>
</body>
</html>