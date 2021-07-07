<!DOCTYPE html>
<html>
<head>
	<title>Tableau</title>
	<style>
	.rouge{background-color:#ECA2C4 ;}
	.verte{background-color:#C8ECA2;}
	td{width:100px;}
	</style>

</head>
<body>

<h1>Tableau PHP</h1>
<?php $salaires['Jean']=1200;
$salaires['Michel']=3000;
$salaires['Paul']=5000;
$salaires['Amina']=1200;
$salaires['Lucas']=3000;
$salaires['Ali']=1009;
?>
<table border="1">
<tr>
<th>Nom </th>
<th>Salaire </th>
</tr>
<?php 
// génération dynamique
foreach($salaires as $nom =>  $salaire){
	if ($salaire <1500) $classe="rouge"; else $classe="verte";
	echo "<tr class='<?= $classe ?>' ><td>".$nom."</td> <td>".$salaire."</td></tr>";
	
}
?>
</table>
</body>
</html>