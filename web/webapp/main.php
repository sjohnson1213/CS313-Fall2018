<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['id'] = 0;
}

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$id = 0;

require 'dbconnect.php';
?>

<html>
    <head>
        <title>Project 1: Budget Application</title>
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
    </head>
    <body>
        <button type="button" onclick="window.location.href='transactions.php'" id="tran_button">Go to Transactions</button>
        <div class="center">
            <div id="welcome">Hello,
            <?php
            foreach ($db->query("SELECT name FROM budget_user WHERE username='$username' AND password='$password'") as $row)
            {
                echo $row['name'];
            }

            foreach ($db->query("SELECT id FROM budget_user WHERE username='$username' AND password='$password'") as $row)
            {
                $id=$row['id'];
                $_SESSION['id'] = $id;
            }

            ?>
            </div>
            <h1 class="page_header">Your Budget</h1><br>
            <table id="budget_table" style="width:100%">
            <tr>
                <th>Income</th>
                <th>Category</th> 
                <th>Expected Expense</th>
            </tr>
            <tr>
                <td>
                <?php
                foreach ($db->query("SELECT income FROM budget WHERE id='$id'") as $row)
                {
                    echo $row['income'];
                }
                ?>
                </td>
                <td>
                <?php
                foreach ($db->query("SELECT category FROM budget WHERE id='$id'") as $row)
                {
                    echo $row['category'];
                }
                ?>
                </td> 
                <td>
                <?php
                foreach ($db->query("SELECT expected_expenses FROM budget WHERE id='$id'") as $row)
                {
                    echo $row['expected_expenses'];
                }
                ?>
                </td>
            </table><br><br><br>

            <button type="button" onclick="window.location.href='add.php'" id="tran_button">Add Budget Item or Transaction</button>
        </div>
    </body>
</html>