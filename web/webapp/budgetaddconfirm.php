<?php
$income = $_POST['income'];
$category = $_POST['category'];
$expected_expense = $_POST['expected_expense'];

require 'dbconnect.php';

?>

<html>
    <head>
        <title>Project 1: Budget Application</title>
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
    </head>
    <body>
        <div class="center">
        <h1 class="page_header">You added a budget item!</h1>
        <button type="button" onclick="window.location.href='main.php'" id="tran_button">Go to Budget</button>
        <button type="button" onclick="window.location.href='transactions.php'" id="tran_button">Go to Transactions</button>
        </div>

    <?php

$stmt = $db->prepare('INSERT INTO budget(income, expected_expense, category) VALUES (:income, :expected_expense, :category);');
$stmt->bindValue(':income', $income, PDO::PARAM_STR);
$stmt->bindValue(':expected_expense', $expected_expense, PDO::PARAM_STR);
$stmt->bindValue(':category', $category, PDO::PARAM_STR);

$stmt->execute();
?>
    </body>
</html>