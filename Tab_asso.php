<h1> Tableaux </h1>
<?php
//tableau indexe, parcours classique
$prenoms=array("Jean","Michel","David");
for ($i=0;$i<sizeof($prenoms);$i++)
echo $prenoms[$i]."<br>";

$salaires=array('Jean'=>1200,
'Michel'=>3000,'Paul'=>5000);
echo "<hr>";
// Accès à un tableau associatif, qui est un ensemble de couple (index, valeur)
//acces par le biais de l'index
echo 'Salaire de Jean est
'.$salaires['Jean'].'<br>';
echo 'Salaire de Michel est
'.$salaires['Michel'].'<br>';
echo 'Salaire de Paul est
'.$salaires['Paul'].'<br>';
//parcours avec la boucle "foreach"
echo "<hr>";
foreach ($salaires as $cle => $s) {
    echo 'Le salaire de '.$cle.' est: '.$s.'<br>';
}
echo "<hr>";
foreach ($salaires as $s) {
    echo "Prochaine salaire ".$s."<br>";
}
?>