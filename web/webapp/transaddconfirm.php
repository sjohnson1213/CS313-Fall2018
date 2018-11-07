<?php
$amount = $_POST['income'];
$date = $_POST['category'];
$category = $_POST['expected_expense'];
$merchant = $_POST['merchant'];
$note = $_POST['note'];

require 'dbconnect.php';
?>

<html>
    <head>
        <title>Project 1: Budget Application</title>
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
    </head>
    <body>
        <div class="center">
        <h1 class="page_header">You added a transaction!</h1>
        <button type="button" onclick="window.location.href='main.php'" id="tran_button">Go to Budget</button>
        <button type="button" onclick="window.location.href='transactions.php'" id="tran_button">Go to Transactions</button>
        </div>

    <?php

$stmt = $db->prepare('INSERT INTO budget(amount, date, category, merchant, note) VALUES (:amount, :date, :category, :merchant, :note);');
$stmt->bindValue(':amount', $amount, PDO::PARAM_STR);
$stmt->bindValue(':date', $date, PDO::PARAM_STR);
$stmt->bindValue(':category', $category, PDO::PARAM_STR);
$stmt->bindValue(':merchant', $merchant, PDO::PARAM_STR);
$stmt->bindValue(':note', $note, PDO::PARAM_STR);

$stmt->execute();
?>
    </body>
</html>