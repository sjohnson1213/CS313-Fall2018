<?php 
echo "<link rel='stylesheet' type='text/css' href='mainstyle.css' />";
?>

<html>
<body>
<div class="center">
Thank you for your purchase <?php echo $_GET["name"]; ?>!<br>
You have purchased: <br>
Your items will be sent to the following address:<br>
<?php echo $_GET["street"]; ?><br>
<?php echo $_GET["city"]; ?>, 
<?php echo $_GET["state"]; ?> 
<?php echo $_GET["zip"]; ?>
</div>
</body>
</html>