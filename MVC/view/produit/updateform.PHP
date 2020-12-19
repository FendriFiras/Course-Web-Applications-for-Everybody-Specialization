<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="/LEARNPHP/MVC/controller/routeur.php?action=updateByCode" method="post">
        Select code:<input type="text" name="code"><br>
        Selectcolum to change <input type="text" name="change">
        <hr>
        code/nomP/categorie/prix/Qte
        <hr>
        <br>
        Select new value <input type="text" name="value"><br>
        <button type="submit">Update</button>

    </form>
</body>
</html>