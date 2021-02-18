<?php
    require 'calculprixTTC.php';
    $commande = array(
        array("clavier",12,12.5),
        array("souris",12,10),
        array("ecran",10,200)
    );
    $x =count($commande);


    for ($i=0 ;$i<$x ;$i++){

        echo $commande[$i][0]."<br>";
        $totale = calculprixTTC(($commande[$i][2]),($commande[$i][1]));
        echo "Prix TTTC est: ".$totale."<hr>";
    };


?>