<?php
include("dbconnexion.php");
$conn = connect("test", "myparam");
if(isset($_POST['code'])){
    $stm = $conn->prepare("INSERT INTO produit(code,nomP,categorie,prix,Qte) VALUES (?,?,?,?,?)");
    $stm->execute([$_POST['code'], $_POST['des'], $_POST['for'], $_POST['pu'], $_POST['qte']]);
    
}

$req = "SELECT * FROM produit";
$result = $conn->query($req);
$produits = $result->fetchAll(PDO::FETCH_ASSOC);
echo "<h2>Afficher tous les enregistrements contenus dans la table Produit dans un tableau</h2>";
echo "<table border='2px'>";
foreach ($produits as $row) {
    echo "<tr>";
    foreach ($row as $key => $value) {
        echo "<th>" . $key . "</th>" . "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
