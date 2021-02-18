<?php
class voiture
{
    private $nb_tour;//to generate auto getter and setters just type cntrl+P and then type >PHP getter and setters
    private $rayon_roue;
    protected $new;//to auto generate constructor and typr cntrl+p and the >constructor

    protected $new2;

    public function __construct($new, $new2)
    {
        $this->new = $new;
        $this->new2 = $new2;
    }




    /**
     * Get the value of nb_tour
     */ 
    public function getNb_tour()
    {
        return $this->nb_tour;
    }

    /**
     * Set the value of nb_tour
     *
     * @return  self
     */ 
    public function setNb_tour($nb_tour)
    {
        $this->nb_tour = $nb_tour;

        return $this;
    }
}
