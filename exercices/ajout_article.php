<?php
require 'calculprixTTC.php';
$totale = calculprixTTC($_POST['pu'],$_POST['qs']);
echo "<h1>Article Ajoutee</h1>";
if(isset($_POST['des'])){ 
    if(!empty($_POST['des'])){
        echo  "<ul>";
        echo "<li>DESIGNATION:".$_POST['des']."</li><br>";
        echo "<li>FORNISEUR:".$_POST['for']."</li><br>";
        echo  "<li>POINTE DE VENTES:".$_POST['pv']."</li><br>";
        echo "<li>PRIX UNITAIRE:".$_POST['pu']."</li><br>";
        echo "<li>PRIXTTC:".$totale."</li><br>";
        echo "<li>QUANTITE EN STOCK:".$_POST['qs']."</li><br>";
        echo "</ul>";

    }
}




?>