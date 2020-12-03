<?php

class ModelProduit{
    private $data=array();
    // La syntaxe ... = NULL signifie que l'argument est optionel
    // Si un argument optionnel n'est pas fourni,
    // alors il prend la valeur par défaut, NULL dans notre cas
    public function __construct($code,$nomP,$categorie,$prix,$Qte)
    { //Ajouter ici le code
        $this->data['code']=$code;
        $this->data['nomP']=$nomP;
        $this->data['categorie']=$categorie;
        $this->data['prix']=$prix;
        $this->data['Qte']=$Qte;
    }
    public function __get($attr){
         if(!isset($this->data[$attr])){
            return "erreur";
         } 
        else{
            return ($this->data[$attr]);
        }
    }
    public function __set($attr,$value){ 
        $this->data[$attr]=$value;
    }
    public function addProduit($conn){
         $stm = $conn->prepare("INSERT INTO produit (code,nomP,categorie,prix,Qte) VALUES (?,?,?,?,?)");
            $stm->execute([ $this->data['code'],$this->data['nomP'],$this->data['categorie'],$this->data['prix'],$this->data['Qte']]);
           
        }
    public static function getAllProduits($conn){
         $req="SELECT * FROM produit";
         $resultat = $conn->query($req);
         $produit = $resultat->fetchall(PDO::FETCH_ASSOC);
         return $produit;
        }
    public static function getProduitByCode($conn, $code){
         $req2='SELECT * FROM produit WHERE code='.$code.'';
         $resultat2 = $conn->query($req2);
         $produit = $resultat2->fetchall(PDO::FETCH_ASSOC);
         return $produit;
    }
    public static function deleteProduit($conn,$code){
         $req='DELETE FROM produit WHERE code='.$code.'';
         $conn->exec($req);
    }
    public static function updateName($conn,$code,$value,$change){
        $req='UPDATE produit SET '.$change.'="'.$value.'" WHERE code='.$code.'';
        $conn->exec($req);
    }

    }


?>