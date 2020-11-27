<?php   
    //starting new session
    session_start();

    //creating an array to store error msgs
    $error=array();

    //creating tabel with users
    $user = array(
        "firas"=> "cluplu44"
    );

    //user regestration
    if(isset($_POST['user_reg'])){
        //checking if Pseudo exist or not

        foreach($user as $pseudo =>$mdp){
        if($pseudo == $_POST['pseudo']){
            array_push($error,"the pseudo name already existe please try another one");
            $_SESSION['pseudoexiste']="the pseudo name already existe please try another one";
            header('Location:inscription.php');     
        }else{
            unset($_SESSION['pseudoexiste']);
        }
        //checking if the two passwors match
        if($_POST['pass1'] != $_POST['pass2'] ){
            array_push($error,"the two passwords does not match");
            $_SESSION['passerror']="the two passwords does not match";
            header('Location:inscription.php');
        }else{
            unset($_SESSION['passerror']);
        }
        }
        if((!isset($_SESSION['pseudoexiste'])) && (!isset($_SESSION['passerror']))){
            $user= array_merge($user, array($_POST['pseudo'] =>$_POST['pass1']));
            $_SESSION['reg_succes']="you are succefully registred now log in";
            header('Location:login.php');
        }
        
    }

    //user login
    if(isset($_POST['user_login'])){
        foreach($user as $pseudo =>$mdp){
            if(($pseudo == $_POST['pseudo']) && ($mdp == $_POST['pass1'])){
                $_SESSION['loginsucces']="you are loged in succesfully";
                
                $_SESSION['username']=$_POST['pseudo'];
                unset($_SESSION['error']);
                header('Location:home.php');     
            }else{
                unset($_SESSION['loginsucces']);
                unset($_SESSION['username']);
                $_SESSION['error']="please chech your pseudo and mdp";
                header('Location:login.php');
        }



    }
    }

    //user logout
    if(isset($_POST['logout'])){
        session_destroy();
        header('Location:login.php');
    }


?>