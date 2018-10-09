<?php 
echo "<link rel='stylesheet' type='text/css' href='mainstyle.css' />";
?>

<html>
    <head>
        <title>Order Confirmation</title>
</head>
<body>
<div class="center"  style="text-align:center">
<h1>Thank you for your purchase <?php echo $_GET["name"]; ?>!</h1><br><br>
<h2>You have purchased: </h2><br><br>
<h3>Your items will be sent to the following address:<br>
<?php echo $_GET["street"]; ?><br>
<?php echo $_GET["city"]; ?>, 
<?php echo $_GET["state"]; ?> 
<?php echo $_GET["zip"]; ?>
</h3>   
</div>
</body>
</html>