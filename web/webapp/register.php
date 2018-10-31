<?php
session_start();
?>

<html>
    <head>
        <title>Project 1: Budget Application</title>
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
    </head>
    <body>
    <form action="regconfirm.php" method="POST">
        <div class="center">
            <h1 class="page_header">Let's Get You Registered!</h1>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required><br><br>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required><br><br>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required><br><br>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required><br><br>

            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>