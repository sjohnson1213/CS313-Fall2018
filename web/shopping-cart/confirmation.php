<?php 
echo "<link rel='stylesheet' type='text/css' href='mainstyle.css' />";
?>

<html>
<body>

Thank you for your purchase <?php echo $_GET["name"]; ?>!<br>
You have purchased: <br>
Your items will be sent to this address: 
<?php echo $_GET["street"]; ?> 
<?php echo $_GET["city"]; ?>, 
<?php echo $_GET["state"]; ?>
<?php echo $_GET["zip"]; ?>

</body>
</html>