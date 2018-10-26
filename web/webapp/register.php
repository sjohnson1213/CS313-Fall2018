<?php
session_start();
?>

<html>
    <head>
        <title>Project 1: Budget Application</title>
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
    </head>
    <body>
    <h1 class="page_header">Let's Get You Registered!</h1>

    <form action="main.php">
        <div class="center">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required><br><br>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required><br><br>

            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>