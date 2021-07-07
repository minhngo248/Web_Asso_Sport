<?php

function genererTableau($low,$high,$taille){
    for ($i=0;$i<$taille;$i++) $t[$i] = rand($low,$high);
    return $t;
}

function trier_selection($t){
    for ($i=0;$i<sizeof($t);$i++) {
        for($j=$i+1;$j < sizeof($t) ;$j++) {
            if ($t[$j] < $t[$i]) {
                $a = $t[$i];
                $t[$i] = $t[$j];
                $t[$j] = $a;
            }
        }
    }
    return $t;
}

$t=genererTableau(1,100,5);
echo "<h1>Tableau d'entiers</h1><br>";
for ($i = 0;$i < 5; $i++) { //affiche apres generation
    echo $t[$i]."<tab style = 'padding-left: 4em'>";
}
echo "<br><br><h1>Apres le tri</h1><br>";
$t = trier_selection($t);
for ($i = 0;$i < 5; $i++) { //apres le tri
    echo $t[$i]."<tab style = 'padding-left: 4em'>";
}
?>