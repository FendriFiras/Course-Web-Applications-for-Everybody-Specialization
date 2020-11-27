


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Your informations</h1>
    <?php
     session_start();
        if(isset($_SESSION['cin'])){
            echo $_SESSION['cin'];
            echo $_SESSION['name'];
            echo $_SESSION['mail'];
            echo $_SESSION['tel'];
        }
        else{
            header("Location:Formulaire.php");
        }

    ?>
    <form action="disconnect.php">
        <button type="submit">disconnect</button>
    </form>

    
</body>
</html>
