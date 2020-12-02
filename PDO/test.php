<?php

include("dbconnexion.php");
$conn = connect("members", "myparam");
$req = "SELECT * FROM user";
$result = $conn->query($req);

//fetc NUM
// if (!$result) {
//     $erreur = $conn->errorInfo();
//     echo "Lecture impossible, code", $conn->errorCode(), $erreur[2];
// } else {
//     while ($row = $result->fetch(PDO::FETCH_NUM)) {
//         foreach ($row as $donn) {
//             echo $donn . "---";
//         }
//         echo "<hr/>";
//     }
//     $result->closeCursor();
// }
// fetch all
$produits = $result->fetchAll(PDO::FETCH_ASSOC);
foreach ($produits as $row) {
    foreach ($row as $key => $value) {
        echo $key ."(".$value . ")-<br>";
    }
    echo "<hr />";
}
//pour INSER UPDATE DELETE
//Requête sans résultats
// $req="UPDATE client SET age=43 WHERE id_client=7";
// $nb=$conn–>exec($req);
// echo "<p>$nb ligne(s) modifiée(s)</p>"

$conn = null;
