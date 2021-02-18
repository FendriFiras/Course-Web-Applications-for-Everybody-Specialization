<?php
    session_start();
    $_SESSION['cin']=$_POST['cin'];
    $_SESSION['name']=$_POST['name'];
    $_SESSION['mail']=$_POST['mail'];
    $_SESSION['tel']=$_POST['tel']; 
    header("Location:affichage.php");
?>