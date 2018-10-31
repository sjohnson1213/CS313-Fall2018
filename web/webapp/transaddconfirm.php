<?php
$amount = $_POST['income'];
$date = $_POST['category'];
$category = $_POST['expected_expense'];
$merchant = $_POST['merchant'];
$note = $_POST['note'];

try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
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