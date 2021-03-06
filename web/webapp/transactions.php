<?php
session_start();
$id=$_SESSION['id'];

require 'dbconnect.php';

?>

<html>
    <head>
        <title>Project 1: Budget Application</title>
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
    </head>
    <body>
        <button type="button" onclick="window.location.href='main.php'" id="tran_button">Back to Budget</button>
        <div class="center">
            <h1 class="page_header">Your Transactions</h1>
            <table id="tran_table" style="width:100%">
            <tr>
                <th>Category</th>
                <th>Date</th>
                <th>Amount</th> 
                <th>Merchant</th>
                <th>Note</th>
            </tr>
            <tr>
                <td>
                <?php
                foreach ($db->query("SELECT category FROM transactions WHERE id='$id'") as $row)
                {
                    echo $row['category'];
                }
                ?>
                </td>
                <td>
                <?php
                foreach ($db->query("SELECT date FROM transactions WHERE id='$id'") as $row)
                {
                    echo $row['date'];
                }
                ?>
                </td> 
                <td>
                <?php
                foreach ($db->query("SELECT amount FROM transactions WHERE id='$id'") as $row)
                {
                    echo "$ " . $row['amount'];
                }
                ?>
                </td>
                <td>
                <?php
                foreach ($db->query("SELECT merchant FROM transactions WHERE id='$id'") as $row)
                {
                    echo $row['merchant'];
                }
                ?>
                </td>
                <td>
                <?php
                foreach ($db->query("SELECT note FROM transactions WHERE id='$id'") as $row)
                {
                    echo $row['note'];
                }
                ?>
                </td>
            </table>
        </div>
    </body>
</html>