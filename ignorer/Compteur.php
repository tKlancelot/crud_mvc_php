<?php

class Compteur{

    private static $_count = 0;

    public function __construct(){
        self::$_count++; 

    }

    public static function getCompteur(){
        return self::$_count;
    }
}

// $compt1 = new Compteur();
// $compt2 = new Compteur();
// $compt3 = new Compteur();

// echo Compteur::getCompteur();


?>  