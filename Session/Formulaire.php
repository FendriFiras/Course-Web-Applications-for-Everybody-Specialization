<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="traitement.php" method="POST">
        <fieldset>
            <legend>Your information</legend>
            <label for="">CIN</label>
            <input type="text" name="cin"><br>
            <label for="">Name</label>
            <input type="text" name="name"><br>
            <label for="">Mail</label>
            <input type="email" name="mail"><br>
            <label for="">Tel</label>
            <input type="text" name="tel"><br>
            <button type="submit">Submit</button>
        </fieldset>
    </form>
    
</body>
</html>