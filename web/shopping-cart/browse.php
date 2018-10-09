<?php 
session_start();
echo "<link rel='stylesheet' type='text/css' href='mainstyle.css' />";
?>

<html>
    <head>
        <title>Product Page</title>
    </head>
    <body>
<a href="view-cart.php">
<img src="images/cart.png" alt="view cart" height="50" width="50" float="right">
</a>

<div class="center">
<h1 class="heading">Lego Sets</h1>
<form action="view-cart.php" method="post">
<table>
    <tr>
    <th>Product</th>
    <th>Amount</th>
    <th>Add to Cart?</th>
    </tr>
    <tr>
        <td>Hulkbuster<br><img src="images/hulkbuster.jpeg"></td>
        <td>23.99</td>
        <td><input type="checkbox" name="sets[]" value="Hulkbuster Lego Set"></td>
    </tr>
    <tr>
        <td>Thor's Weapon Quest<br><img src="images/quest.jpeg"></td>
        <td>19.99</td>
        <td><input type="checkbox" name="sets[]" value="Thor's Weapon Quest Lego Set"></td>
    </tr>
    <tr>
        <td>Ultimate Battle<br><img src="images/ultimate-battle.jpeg"></td>
        <td>69.99</td>
        <td><input type="checkbox" name="sets[]" value="Ultimate Battle Lego Set"></td>
    </tr>
    <tr>
        <td>Ant-Man and the Wasp<br><img src="images/antman-wasp.jpeg"></td>
        <td>16.99</td>
        <td><input type="checkbox" name="sets[]" value="AntMan and the Wasp Lego Set"></td>
    </tr>
    <tr>
        <td>Black Panther VS Rhino<br><img src="images/black-panther.jpeg"></td>
        <td>15.99</td>
        <td><input type="checkbox" name="sets[]" value="Black Panther VS Rhino Lego Set"></td>
    </tr>
    <tr>
        <td>Beware the Vulture<br><img src="images/beware.jpeg"></td>
        <td>25.99</td>
        <td><input type="checkbox" name="sets[]" value="Beware the Vulture Lego Set"></td>
    </tr>
</table>
<input type="submit" value="Add To Cart">
</form>
</div>
</body>
</html>
    
