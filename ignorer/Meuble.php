<?php

class Meuble{
    private $type; 
    private $materiau; 
    private $prix;
    
    public static function maFonctionStatique(){
        echo 'je suis un meuble';
    }

    public function __construct($type,$materiau,$prix)
    {
        $this->type = $type;
        $this->materiau = $materiau;
        $this->prix = $prix;
    }

    public function acheter(Personnage $personnage){
        echo $personnage->_bourse -= $this->prix;  
    }
}

?>