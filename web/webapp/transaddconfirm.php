HAVEN"T TOUCHED THIS YET!!!!
<?php
$income = $_POST['income'];
$category = $_POST['category'];
$expected_expense = $_POST['expected_expense'];

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
        <h1 class="page_header">You added information</h1>
        </div>

    <?php

$stmt = $db->prepare('INSERT INTO budget(income, expected_expense, category) VALUES (:income, :expected_expense, :category);');
$stmt->bindValue(':income', $income, PDO::PARAM_STR);
$stmt->bindValue(':expected_expense', $expected_expense, PDO::PARAM_STR);
$stmt->bindValue(':category', $category, PDO::PARAM_STR);

$stmt->execute();
?>
        <button type="button" onclick="window.location.href='main.php'" id="tran_button">Go to Budget</button>
        <button type="button" onclick="window.location.href='transactions.php'" id="tran_button">Go to Transactions</button>
    </body>
</html>