<table border = 1>
<?php
$salaire = array('Jean'=>1700, 'Gael' => 600, 'Tom' => 2000, 'Allie' => 500);
echo "<tr>";
echo "<th> Prenom </th>";
echo "<th> Salaire </th>";
echo "<tr>";
foreach($salaire as $ind => $s) {
    echo "<tr>";
    if ($s < 1500) {
        echo "<th style='background-color: red;'>".$ind."</th>";
        echo "<th style='background-color: red;'>".$s."</th>";
    }
    else {
        echo "<th style='background-color: green;'>".$ind."</th>";
        echo "<th style='background-color: green;'>".$s."</th>";
    }
    echo "</tr>";
}
?>
</table>