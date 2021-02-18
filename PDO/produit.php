<?php
include("dbconnexion.php");
$conn = connect("test", "myparam");
// $req1 = "INSERT INTO produit (code,nomP,categorie,prix,Qte) VALUES (1, 'Souris', 'Info', 15, 10)";
// $req2 = "INSERT INTO produit (code,nomP,categorie,prix,Qte) VALUES (2, 'Clavier', 'Info', 30, 20)";
// $req3 = "INSERT INTO produit (code,nomP,categorie,prix,Qte) VALUES (3, 'Ecran', 'Info', 200, 10)";
// $conn->exec($req1);
// $conn->exec($req2);
// $conn->exec($req3);
//en utilisant la requetes preparer
// $stm = $conn->prepare("INSERT INTO produit (code,nomP,categorie,prix,Qte) VALUES (?,?,?,?, ?)");
// $stm->execute([1, 'Souris', 'Info', 15, 10]);
// $stm->execute([2, 'Clavier', 'Info', 30, 20]);
// $stm->execute([3, 'Ecran', 'Info', 200, 10]);
$req = "SELECT * FROM produit";
$result = $conn->query($req);
$produits = $result->fetchAll(PDO::FETCH_ASSOC);
echo "<h2>Afficher tous les enregistrements contenus dans la table Produit dans un tableau</h2>";
echo "<table border='2px'>";
foreach ($produits as $row) {
    echo "<tr>";
    foreach ($row as $key => $value) {
        echo "<th>".$key."</th>" ."<td>".$value . "</td>";  
    }
    echo "</tr>";
}
echo "</table><br>";
echo "<h2>Afficher l’enregistrement qui a pour code 1</h2>";
$req2="SELECT code,nomP,categorie,prix,Qte FROM produit WHERE code =1";
$result2 = $conn->query($req2);
$select = $result2->fetchAll(PDO::FETCH_ASSOC);
foreach ($select as $row) {
    foreach ($row as $key => $value) {
        echo "<h3>".$key."</h3>" .$value;  
    } 
}
echo "<h2>Modification de la quantite du code 2 de 20 vers 50</h2>";
$req3 = "UPDATE produit SET Qte=50 WHERE code=2";
$conn->exec($req3);

echo "<h2>Supprimer le produit ayant le code 3</h2>";
$req4="DELETE FROM produit WHERE code=3";
$conn->exec($req4);
?>