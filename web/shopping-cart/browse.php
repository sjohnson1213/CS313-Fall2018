<?php session_start();

$images = array("images/hulkbuster.jpeg", "images/quest.jpeg", "images/ultimate-battle.jpeg", "images/antman-wasp.jpeg", "images/black-panther.jpeg", "images/beware.jpeg");
$products = array("Hulkbuster", "Thor's Weapon Quest", "Ultimate Battle", "Ant-Man and the Wasp", "Black Panther/Rhino", "Beware the Vulture");
$amounts = array("23.99", "19.99", "69.99", "16.99", "15.99", "25.99");
echo "<link rel='stylesheet' type='text/css' href='mainstyle.css' />";
?>

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
    <td>Add</td>
    </tr>
    <?php
}
?>
