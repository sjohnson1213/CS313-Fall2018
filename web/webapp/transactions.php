<?php
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
            <h1 class="page_header">Your Transactions</h1>
            <table id="tran_table" style="width:100%">
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