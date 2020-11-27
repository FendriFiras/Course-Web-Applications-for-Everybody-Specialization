<?php
    //$fond="red";
    //$text="grey";
    //supprimer les anciennescookies
    setcookie('fond');
    setcookie('text');
    //la cookies est etablie et on a des valeur 
    if(isset($_COOKIE['fond']) && isset($_COOKIE['text'])){
        // les valeur sont donne dans le formulaire 
        if(isset($_POST['fond']) && isset($_POST['texte'])){
            $fond=$_POST['fond'];
            $text=$_POST['texte'];
            setcookie('fond',$fond,time()+(86400 * 60), "/");
            setcookie('text',$text,time()+(86400 * 60), "/");
        }
        //formulaire vide --- > on recupere les valeur anciennes 
        else{
            $fond=$_COOKIE['fond'];
            $text=$_COOKIE['text'];
        }


    }
    // la premier visite du site
    else{
        if(isset($_POST['fond']) && isset($_POST['texte'])){
            $fond=$_POST['fond'];
            $text=$_POST['texte']; 
            setcookie('fond',$fond,time()+(86400 * 60), "/");
            setcookie('text',$text,time()+(86400 * 60), "/");
        }
        // la cookies n'est pas cree pas de valeur
        else{
            $fond="red";
            $text="grey";
        }
    }



;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Text Color</title>
</head>
<body style="color:<?=$text?>; background-color:<?=$fond?>;">
    <h1>Your Color Text</h1>
    <form method="post" action="">
        <fieldset>
        <legend>Choisissez vos couleurs</legend>
        <label>Couleur de fond
        <input type="text" name="fond" />
        </label><br /><br />
        <label>Couleur de texte
        <input type="text" name="texte" />
        </label><br />
        <input type="submit" value="Envoyer" />&nbsp;&nbsp;
        <input type="reset" value="Effacer" />
        </fieldset>
    </form>
     
</body>
</html>