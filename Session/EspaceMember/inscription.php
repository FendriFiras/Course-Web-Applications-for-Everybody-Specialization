<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome user you have to creat an account if you dant have one</h1>
    <form action="serveur.php" method="post">
        <fieldset>
            <legend><h2>Inscription</h2></legend>
            <label for="">Titre</label>
            <input type="checkbox" name="M" id="M">
            <label for="M">M</label>
            <input type="checkbox" name="Mme" id="Mme">
            <label for="Mme">M</label><br>
            <label for="">Nom</label>
            <input type="text" name="name"><br>
            <label for="">Prenom</label>
            <input type="text" name="prename"><br>
            <label for="">Pseudo</label>
            <input type="text" name="pseudo" require><br>
            <label for="">E-mail</label>
            <input type="email" name="email" require><br>
            <label for="">Adress</label>
            <input type="text" name="adress"><br>
            <label for="">telephone</label>
            <input type="text" name="tlf"><br>
            <label for="">Mot de pasee (8 characters minimum)</label>
            <input type="password" name="pass1"><br>
            <label for="">Repeat  Mot de pasee</label>
            <input type="password" name="pass2"><br>
            <button type="submit" name="user_reg">Inscrit</button>
            <p>if you already have an account <a href="login.php">Log in</a></p>


        </fieldset>
    </form>
    <?php
    session_start();

        if(isset($_SESSION['pseudoexiste'])){
            echo $_SESSION['pseudoexiste']; 
        }

        if(isset($_SESSION['passerror'])){
            echo "<br>".$_SESSION['passerror']; 
        }


    ?>


    
</body>
</html>