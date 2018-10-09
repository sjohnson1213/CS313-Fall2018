<?php 
echo "<link rel='stylesheet' type='text/css' href='mainstyle.css' />";
?>
<html> 
<head>
<link href="https://fonts.googleapis.com/css?family=Fahkwang" rel="stylesheet">
<style> 
</style>
</head>
<body>
    <div class="center">
    <h1 id="checkout">Checkout</h1>
    <form action="confirmation.php" method="get">
        Name: <input type="text" name="name"><br><br>
        Street Address: <input type="text" name="street"><br><br>
        City: <input type="text" name="city"><br><br>
        State: <input type="text" name="state"><br><br>
        Zip Code: <input type="text" name="zip"><br><br>
        <input type="submit" style="float: left">
    </form>
    </div>
</body>
</html>