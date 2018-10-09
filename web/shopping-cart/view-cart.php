<?php 
echo "<link rel='stylesheet' type='text/css' href='mainstyle.css' />";
?>

<?php

$sets= $_POST["sets"];

foreach($sets as $set) {
    echo $set;
    <br>
}