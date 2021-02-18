<?php
require_once ('../model/ModelProduit.php'); // chargement du modèle
class ControllerProduit{
    public static function getAll() {
    //appel au modèle pour gerer la BD
    $produits = ModelProduit::getAllProduits(Model::$pdo); 
    //redirige vers la vue
    require ('../view/produit/list.php');
    }

    public static function getByCode() {
        $code =intval($_GET['code']);
        $p = ModelProduit::getProduitByCode(Model::$pdo,intval($code));
        if(!empty($p)){
            require ('../view/produit/detaill.php');
        }else{
            require ('../view/produit/error.php');
        }
        
    }
    public static function add() {
        require ('../view/produit/addForm.php');

    }
    public static function added() {
        $code= $_POST['code'];
        $nomP= $_POST['des'];
        $categorie= $_POST['for'];
        $prix= $_POST['pu'];
        $Qte= $_POST['qte'];
        $prod = new ModelProduit($code,$nomP,$categorie,$prix,$Qte);


        $prod->addProduit(Model::$pdo); 

        
        echo "Product aded succesfully";
        ControllerProduit::getAll();
    }
    public static function deleteByCode() {
        $code =intval($_GET['code']);
        ModelProduit::deleteProduit(Model::$pdo,$code);
        echo 'row with code:'.$code.' deleted succesfully';
        ControllerProduit::getAll();
    }
    public static function updateByCode(){
        $code =$_POST['code'];
        $change=$_POST['change'];
        $value=$_POST['value'];
        ModelProduit::updateName(Model::$pdo,$code,$value,$change);
        if (isset($code)){
            echo 'row with code:'.$code.' updated succesfully';
        }
        
        ControllerProduit::getAll();
    }
}



?>