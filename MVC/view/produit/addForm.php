<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout dans base</title>
</head>
<body>
    <form action="/LEARNPHP/MVC/controller/routeur.php?action=added" method="POST">
        Code:<input type="text" name="code"><br>
        Designation:<input type="text" name="des"><br>
        Categorie:        
        <select name="for">
            <option value="Info">Informatique</option>
            <option value="Elec">Electrique</option>
        </select><br>
        Prix Unitaire: <input type="text" name="pu"><br>
        Quantite:<input type="text" name="qte"><br>
        <input type='hidden' name='action' value='added'>

        <button type="submit" name="ajou-prod">Ajouter</button>


    </form>
</body>
</html>