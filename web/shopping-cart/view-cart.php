<?php
session_start(); 
echo "<link rel='stylesheet' type='text/css' href='mainstyle.css' />";

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = 0;
}

foreach ($sets as $set) {
    $_SESSION["cart"]
}
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
            <input type="button" value="Back to Browse" onclick="window.location.href='browse.php'" class="button"/>
            <input type="button" value="Continue to Checkout" onclick="window.location.href='checkout.php'" class="button" />   
        </div>
    </body>
</html>