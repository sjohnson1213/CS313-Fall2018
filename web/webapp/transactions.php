<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
}

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$id = 0;

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

foreach ($db->query("SELECT id FROM budget_user WHERE username='$username' AND password='$password'") as $row)
{
    $id=$row['id'];
}
?>

<html>
    <head>
        <title>Project 1: Budget Application</title>
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
    </head>
    <body>
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