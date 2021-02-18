<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome user</h1>
    <?php
        if(isset($_SESSION['reg_succes'])){
            echo $_SESSION['reg_succes'];
        }
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
        }
    ?>
    <form action="serveur.php" method="post">
        <fieldset>
            <legend><h2>Log in </h2></legend>
            <label for="">Pseudo</label>
            <input type="text" name="pseudo" require><br>
            
            <label for="">Mot de pasee (8 characters minimum)</label>
            <input type="password" name="pass1"><br>
           
            <button type="submit" name="user_login">Log in</button>
            <p>if you don't have an account <a href="inscription.php">Inscription</a></p>


        </fieldset>
    </form>



    
</body>
</html>