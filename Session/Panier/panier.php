<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <style>
        table{
            margin:20% 0% 0% 40%;
        }

    </style>
</head>
<body>
    <?php
    session_start();
    if((!isset($_SESSION['huile'])) || (!isset($_SESSION['confiture'])) || (!isset($_SESSION['biscotte'])) || (!isset($_SESSION['jus']))){
        $_SESSION['totale']=$_SESSION['huile']=$_SESSION['jus']=$_SESSION['biscotte']=$_SESSION['confiture']=0;
    }else{
        $_SESSION['totale']=$_SESSION['huile']+$_SESSION['jus']+$_SESSION['biscotte']+$_SESSION['confiture'];
    }
    if(isset($_POST['huille+'])){
            $_SESSION['huile']++;
    }
    if(isset($_POST['huille-'])){
        $_SESSION['huile']--;
    }
    //---------------------
    if(isset($_POST['confiture+'])){
        $_SESSION['confiture']++;
    }
    if(isset($_POST['confiture-'])){
        $_SESSION['confiture']--;
    }
    //--------------
    if(isset($_POST['jus+'])){
        $_SESSION['jus']++;
    }
    if(isset($_POST['jus-'])){
        $_SESSION['jus']--;
    }
    //------------------
    if(isset($_POST['biscotte+'])){
        $_SESSION['biscotte']++;
    }
    if(isset($_POST['biscotte-'])){
        $_SESSION['biscotte']--;
    }
    //-----------------------
    if(isset($_POST['logout'])){
        session_destroy();
        header('Location:panier.php');
    }
    if(isset($_POST['retour'])){
        header('Location:produit.php');
    }
    


     ?>
    <h1>Votre Panier est comme suit</h1>
    <table border="2px">
        <tr>
            <th>hueil</th>
            <th>confiture</th>
            <th>biscottes</th>
            <th>jus</th>
        </tr>
        <tr>
            <td>
                <?php  echo $_SESSION['huile'] ?>
                <form action="" method="POST">
                    <button type="submit" name="huille+">+</button>
                </form>
                <form action="" method="POST">
                    <button type="submit" name="huille-">-</button>
                </form>
            </td>
            <td>
                <?php echo $_SESSION['confiture'] ?>
                <form action="" method="POST">
                    <button type="submit" name="confiture+">+</button>
                </form>
                <form action="" method="POST">
                    <button type="submit" name="confiture-">-</button>
                </form>
            </td>
            <td>
                <?php  echo $_SESSION['biscotte'] ?>
                <form action="" method="POST">
                    <button type="submit" name="biscotte+">+</button>
                </form>
                <form action="" method="POST">
                    <button type="submit" name="biscotte-">-</button>
                </form>
            </td>
            <td>
                <?php  echo $_SESSION['jus'] ?>
                <form action="" method="POST">
                    <button type="submit" name="jus+">+</button>
                </form>
                <form action="" method="POST">
                    <button type="submit" name="jus-">-</button>
                </form>
            </td>
        </tr>
    </table>
<h1>Your Totale Price:</h1>
<?php
$a=$_SESSION['huile']*10;
$b=$_SESSION['confiture']*4;
$c=$_SESSION['biscotte']*2;
$d=$_SESSION['jus']*(1.5);
$p=($a*10)+($b*4)+($c*2)+($d*1.5);
echo $p;
?>
<br>
<form action="" method="POST">
<button type="submit" name="logout">clear Panier</button><br>
<button type="submit" name="retour">Page Produit</button><br>
</form>

</body>
</html>