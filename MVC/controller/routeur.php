<?php
require_once '../model/Model.php';//na9saa f ennoncee
require_once 'ControllerProduit.php';
echo'<a href="routeur.php?action=add">Add Product</a>&nbsp;&nbsp;&nbsp;&nbsp;';

echo'<a href="../view/produit/updateform.php">Update product</a><br>';
//update n'st terminer il monque un formulaire


// Appel de l’action = la méthode statique getAll() de ControllerProduits
// On recupère l'action passée dans l'URL
if((isset($_GET['action']) && (!empty($_GET['action'])))){
    $action =$_GET['action'];
    ControllerProduit::$action();
}else{
    ControllerProduit::getAll();
}

// Appel de la méthode statique $action de ControllerProduit

?>