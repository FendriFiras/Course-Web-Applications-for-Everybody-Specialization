<?php
    $produit = array(
        "calvier" => "12",
        "souris" => "13",
        "ecran" => "10"
    );
    
    foreach ($produit as $type=>$qte ){
        echo "Designation:".$type;
        echo "quantite:".$qte."<br>";
    }


?>
