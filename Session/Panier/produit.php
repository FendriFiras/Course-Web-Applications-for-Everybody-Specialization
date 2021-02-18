<?php
    session_start();


    if(isset($_POST['huille'])){
        if(!isset($_SESSION['huile'])){
            $_SESSION['huile']=1;
        }
        else{
            $_SESSION['huile']++;
        }
        
    }
    if(isset($_POST['confiture'])){
        if(!isset($_SESSION['confiture'])){
            $_SESSION['confiture']=1;
        }
        else{
            $_SESSION['confiture']++;
        }
        
    }
    if(isset($_POST['biscotte'])){
        if(!isset($_SESSION['biscotte'])){
            $_SESSION['biscotte']=1;
        }
        else{
            $_SESSION['biscotte']++;
        }
        
    }
    
    if(isset($_POST['jus'])){
        if(!isset($_SESSION['jus'])){
            $_SESSION['jus']=1;
        }
        else{
            $_SESSION['jus']++;
        }
        
    }
    if((!isset($_SESSION['huile'])) || (!isset($_SESSION['confiture'])) || (!isset($_SESSION['biscotte'])) || (!isset($_SESSION['jus']))){
        $_SESSION['totale']=$_SESSION['huile']=$_SESSION['jus']=$_SESSION['biscotte']=$_SESSION['confiture']=0;
    }else{
        $_SESSION['totale']=$_SESSION['huile']+$_SESSION['jus']+$_SESSION['biscotte']+$_SESSION['confiture'];
    }
    

    

    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paier</title>
    <style>
        .panier{
            
            display:inline-block;
            margin-left:92%;  
        }
        .item{
            color:rgb(59, 59, 59);
            display:inline-block;
            width:20%;
            margin:2%;
            text-align:center;
            border-style:solid;
            border-radius: 20px;
            border-width: 1px;
            border-color:goldenrod;
        }
        button{
            color:rgb(59, 59, 59) ;
            background-color: rgb(255, 195, 42);
            border-bottom: none;
            border-radius: 20px 20px 0px 0px;
            border-width: 1px;

        }
        .unique{
            color:rgb(59, 59, 59) ;
            background-color: rgb(255, 195, 42);
            border-bottom: solid;
            border-radius: 20px 20px 20px 20px;
            border-width: 1px;
            width:100px;
        }
    </style>
</head>
<body>
    <div class="panier">
    <?php echo $_SESSION['totale'] ?><img src="carts.svg" alt="" width=50px>
    </div>


    <div class="item">
        <h2>Huile</h2>
        <img src="huile.PNG" alt="" width="80%" height="173px">
        <p>Price:10dt</p>
        <form action="" method="POST">
            <button type="submit" name="huille">Ajouter au Panier</button>
        </form>
        
    </div>

    <div class="item">
        <h2>Cofiture</h2>
        <img src="Cofiture.PNG" alt="" width="80%" height="173px">
        <p>Price:4dt</p>
        <form action="" method="post">
            <button type="submit" name="confiture">Ajouter au Panier</button>
        </form>
    </div>

    <div class="item">
        <h2>Biscotte</h2>
        <img src="biscute.PNG" alt="" width="80%" height="173px">
        <p>Price:2dt</p>
        <form action="" method="post"> 
            <button type="submit" name="biscotte">Ajouter au Panier</button>
        </form>
    </div>

    <div class="item">
        <h2>Jus</h2>
        <img src="jus.PNG" alt="" width="80%" height="173px">
        <p>Price:1.5dt</p>
        <form action="" method="post">
            <button type="submit" name="jus">Ajouter au Panier</button>
        </form>
    </div>

    <form action="panier.php" method="post">
        <button type="submit" class="unique">Total</button>
    </form>

    
</body>
</html>