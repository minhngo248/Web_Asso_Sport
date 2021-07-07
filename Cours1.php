<?php
function fact($n,$acc) {
    if($n == 0) return $acc;
    else return fact($n-1,$acc*$n);
}
echo "Bonjour " ."tout le monde";
$nom = "Minh";
$age = 22;
$moy = 20;
$moy = "abc";
$x = null;
echo "<h1> Résultat </h1>";
echo $nom." ".$age.$moy."<br>";
echo gettype($nom)."<br>";
echo gettype($x);
?>