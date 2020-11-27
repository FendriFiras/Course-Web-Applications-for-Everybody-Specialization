<?php
    define ("TVA",0.19,true);
    function calculprixTTC($prixht,$qte){
        $ttc = $prixht*TVA;
        return ($ttc*$qte);
    }
?>