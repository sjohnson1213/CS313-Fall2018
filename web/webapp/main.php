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
            </table>

        </div>
    </body>
</html>