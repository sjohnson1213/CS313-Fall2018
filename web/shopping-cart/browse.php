<?php session_start();

//Set up products, images, and cost
$images = array("images/hulkbuster.jpeg", "images/quest.jpeg", "images/ultimate-battle.jpeg", "images/antman-wasp.jpeg", "images/black-panther.jpeg", "images/beware.jpeg");
$products = array("Hulkbuster", "Thor's Weapon Quest", "Ultimate Battle", "Ant-Man and the Wasp", "Black Panther/Rhino", "Beware the Vulture");
$amounts = array("23.99", "19.99", "69.99", "16.99", "15.99", "25.99");
echo "<link rel='stylesheet' type='text/css' href='mainstyle.css' />";
 
if ( !isset($_SESSION["total"]) ) {
    $_SESSION["total"] = 0;
    for ($i=0; $i< count($products); $i++) {
     $_SESSION["quantity"][$i] = 0;
    $_SESSION["amounts"][$i] = 0;
   }
  }

 if ( isset($_GET["add"]) )
   {
   $i = $_GET["add"];
   $quantity = $_SESSION["quantity"][$i] + 1;
   $_SESSION["amounts"][$i] = $amounts[$i] * $quantity;
   $_SESSION["cart"][$i] = $i;
   $_SESSION["quantity"][$i] = $quantity;
 }
?>

<a href="view-cart.php">
<img src="images/cart.png" alt="view cart" height="50" width="50" >
</a>

<div class="center">
<h1>Lego Sets</h1>
<table>
    <tr>
    <th>Product</th>
    <th>Amount</th>
    <th>Add to Cart?</th>
    </tr>
<?php
for ($i=0; $i<count($products); $i++){
    ?>
    <tr>
    <td><?php echo($products[$i]);?><br><?php echo '<img src="'.($images[$i]).'">';?></td>
    <td><?php echo($amounts[$i]);?></td>
    <td><a href="?add=<?php echo($i); ?>">Add</a></td>
    </tr>
    <?php
}
?>
</table>
</div>
    
