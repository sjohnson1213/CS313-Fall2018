<?php 
echo "<link rel='stylesheet' type='text/css' href='mainstyle.css' />";
?>
<html> 
<body>
    <div class="center">
    <h1 id="checkout">Checkout</h1>
    <form action="confirmation.php" method="post">
        Name: <input type="text" name="name" float="right"><br><br>
        Street Address: <input type="text" name="street" style="direction: rtl;"><br><br>
        City: <input type="text" name="city" style="direction: rtl;"><br><br>
        State: <input type="text" name="state" style="direction: rtl;"><br><br>
        Zip Code: <input type="text" name="zip" style="direction: rtl;"><br><br>
        <input type="submit" style="float: left">
    </form>
    </div>
</body>
</html>