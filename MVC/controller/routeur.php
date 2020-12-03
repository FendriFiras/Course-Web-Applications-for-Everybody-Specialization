<?php
require_once '../model/Model.php';//na9saa f ennoncee
require_once 'ControllerProduit.php';
echo'<a href="routeur.php?action=add">Add Product</a>';
ControllerProduit::getAll();

// Appel de l’action = la méthode statique getAll() de ControllerProduits
// On recupère l'action passée dans l'URL
$action =$_GET['action'];
// Appel de la méthode statique $action de ControllerProduit
ControllerProduit::$action();
?>