<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List des Produit</title>
</head>

<body>
    <table border="2px">
        <h3>Liste des Produits</h3>
        <tr>
            <th>Code</th>
            <th>Nom produit</th>
            <th>Prix</th>
            <th>Qunatité</th>
            <th>Catégorie</th>
        </tr>
        <?php foreach ($produits as $p) { ?>
            <tr>
                <td> <?php echo $p['code'] ?></td>
                <td> <?php echo $p['nomP'] ?></td>
                <td> <?php echo $p['categorie'] ?></td>
                <td> <?php echo $p['prix'] ?></td>
                <td> <?php echo $p['Qte'] ?></td>
                <td><a href="/LEARNPHP/MVC/controller/routeur.php?action=getBycode&code=<?php echo $p['code'] ?>">Voir detaille</a></td>
                <td><a href="/LEARNPHP/MVC/controller/routeur.php?action=deleteByCode&code=<?php echo $p['code'] ?>">supprimer</a></td>
            
            </tr>
        <?php } ?>
    </table>
</body>

</html>