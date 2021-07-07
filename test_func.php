<h1> PHP </h1>
<table>
<?php
// grille du morpion paramétrée , $n*$n
$n=10;
for ($l=0;$l<$n;$l++){
    echo "<tr>";
    for ($c=0;$c<$n;$c++) {
        echo "<td><img style ='width:30px;height:30px;border:4px solid black;' src='terre.png'></td>";
    }
    echo "</tr>";
}
?>
</table>