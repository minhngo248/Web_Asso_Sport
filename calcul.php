<?php 
$price=$_GET['price'];
$taux=$_GET['tva'];
$tva=($price*$taux)/100;
$price=$price+$tva;
echo "Le prix TTC est : ".$price;
?>