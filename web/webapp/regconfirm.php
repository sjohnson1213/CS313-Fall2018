<?php
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];

require 'dbconnect.php';
?>

<html>
    <head>
        <title>Project 1: Budget Application</title>
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
    </head>
    <body>
        <div class="center">
        <h1 class="page_header">Congratulations! You're now registered!</h1>

        <p>The information you have entered is:</p>
        <?php
        echo $username . "<br>"; 
        echo $password . "<br>";
        echo $name . "<br>";
        echo $email . "<br>";
        ?>
        </div>

        <?php

        $stmt = $db->prepare('INSERT INTO budget_user(username, password, name, email) VALUES (:username, :password, :name, :email);');
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);

        $stmt->execute();
        ?>
        <button type="button" onclick="window.location.href='login.php'" id="tran_button">Login</button>
    </body>
</html>