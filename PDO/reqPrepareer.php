<?php
    include("dbconnexion.php");
    $conn = connect("test", "myparam");
    // $req1 = "INSERT INTO produit (code,nomP,categorie,prix,Qte) VALUES (1, 'Souris', 'Info', 15, 10)";
    // $conn->exec($req1);
    // peut metre ? ou :code just pou dire que c'est une inconne 
    // $stm = $conn->prepare("INSERT INTO produit (code,nomP,categorie,prix,Qte) VALUES (?,?,?,?,?)");
    // $stm->execute([4,'test','info',10,20]);
    // $stm->execute([5,'test2','info',10,20]);
    $stm2 = $conn->prepare("INSERT INTO produit (code,nomP,categorie,prix,Qte) VALUES (:code,:nomP,:categorie,:prix,:Qte)");
    $stm2->execute(['code'=>6 , 'nomP'=>'test3' , 'categorie'=>'info','prix'=>20, 'Qte'=>100]);
?>