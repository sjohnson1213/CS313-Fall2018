<?php 
echo "<link rel='stylesheet' type='text/css' href='mainstyle.css' />";
?>

<html>
    <head>
        <title>Cart</title>
    </head>
    <body>
        <div class="center">
            <h1 class="heading">Cart</h1>
            <?php
                $sets= $_POST["sets"];
                foreach($sets as $set) {
                     echo "$set<br>";
                }
            ?>
            <br>
            <input type="button" value="Back to Browse" onclick="window.location.href='browse.php'" class="button"/>
            <input type="button" value="Continue to Checkout" onclick="window.location.href='checkout.php'" class="button"/>   
        </div>
    </body>
</html>