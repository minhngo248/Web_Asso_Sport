<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            .rouge {background-color: red;}
            .verte {background-color: green;}
        </style>
    </head>

    <body>
        <h1> Tableau de salaires </h1>
        <?php
            $salaire = array('Jean'=>1700, 'Gael' => 600, 'Tom' => 2000, 'Allie' => 500);
        ?>
        <table border="1">
            <tr>
                <th> Prenom </th>
                <th> Salaire </th>
            </tr>
            <?php
                foreach($salaires as $nom =>  $salaire){
                    if ($salaire <1500) $classe="rouge"; else $classe="verte";
                    echo "<tr class='<?= $classe ?>' ><td>".$nom."</td> <td>".$salaire."</td></tr>";  
            }
            ?>
        </table>
    </body>
</html>