<?php
    class voiture{
        
        private $nb_tour;
        private $rayon_roue;
        function __construct($nb_tour,$rayon_roue)
        {
            $this->nb_tour=$nb_tour;
            $this->rayon_roue=$rayon_roue;
        }

        public function getSpeed(){
            return $this->nb_tour * $this->rayon_roue;
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

        /**
         * Get the value of rayon_roue
         */ 
        public function getRayon_roue()
        {
                return $this->rayon_roue;
        }

        /**
         * Set the value of rayon_roue
         *
         * @return  self
         */ 
        public function setRayon_roue($rayon_roue)
        {
                $this->rayon_roue = $rayon_roue;

                return $this;
        }
    }
    $v = new voiture(5,2);
    echo "vitesse voiture=".$v->getSpeed();
?>