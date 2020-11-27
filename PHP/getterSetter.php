<?php
class Personne1
{
    private $nom;
    private $prenom;
    function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function __get($attr)
    {
        if (!isset($this->$attr)) return "erreur";
        else return ($this->$attr);
    }
    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }
    public function __toString()
    {
        $s = "la personne est: " . $this->nom . " " . $this->prenom;
        return $s;
    }
}
$p = new Personne1("firas","fendri");
$p->nom = "Ali"; // exécution automatique de la fonction __set()
//__set(‘nom’,’Ali’)
echo $p->nom."<br>"; // exécution automatique de la fonction __get()
