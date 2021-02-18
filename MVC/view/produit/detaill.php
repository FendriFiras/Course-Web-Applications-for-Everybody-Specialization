<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List des Produit</title>
</head>

<body>
    <table border="1px">
        <h3>Liste des Produits(detaille)</h3>
        <tr>
            <th>Code</th>
            <th>Nom produit</th>
            <th>Prix</th>
            <th>Qunatité</th>
            <th>Catégorie</th>
        </tr>
        <?php foreach ($p as $p) { ?>
            <tr>
                <td> <?php echo $p['code'] ?></td>
                <td> <?php echo $p['nomP'] ?></td>
                <td> <?php echo $p['categorie'] ?></td>
                <td> <?php echo $p['prix'] ?></td>
                <td> <?php echo $p['Qte'] ?></td>
                
            </tr>
        <?php } ?>
    </table>
</body>

</html>