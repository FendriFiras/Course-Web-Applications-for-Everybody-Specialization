<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();

        if(isset($_SESSION['loginsucces'])){
            echo $_SESSION['loginsucces']; 
        }
        echo "<h1>".$_SESSION['username']."</h1>";
    ?>
<form action="serveur.php" method="post">
    <button type="submit" name="logout">logout</button>
</form>
    
</body>
</html>