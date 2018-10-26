<?php
session_start();
?>

<html>
    <head>
        <title>Project 1: Budget Application</title>
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
    </head>
    <body>
        <button type="button" onclick="window.location.href='register.php'">Register</button>
        <h1 class="page_header">Register or Login</h1>

        <form action="main.php">
            <div class="container">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required><br><br>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required><br><br>

                <button type="submit">Login</button>
            </div>
        </form>
    </body>
</html>