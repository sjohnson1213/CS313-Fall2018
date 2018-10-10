<?php
session_start(); 
$sets = $_POST["sets"];

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}

foreach ($sets as $set) {
    $_SESSION["cart"][] = $set;
}

echo "<link rel='stylesheet' type='text/css' href='mainstyle.css' />";
?>

<html>
    <head>
        <title>Cart</title>
    </head>
    <body>
        <div class="center">
            <h1 class="heading">Your Cart</h1>
            <?php
                $items = $_SESSION["cart"];
                foreach($items as $item)
                echo "$item<br>";
            ?>
            <br>
            <input type="button" id="back" value="Back to Browse" onclick="window.location.href='browse.php'" class="button"/>
            <input type="button" id="continue" value="Continue to Checkout" onclick="window.location.href='checkout.php'" class="button"/>   
        </div>
    </body>
</html>