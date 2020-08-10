<?php

// ini_set("display_errors", 0);
// echo(ini_get("display_errors"));
// $toto = 'blabla';
// echo '<pre>';
// var_dump($toto);
// echo '<pre>';

class Personnage
{
    private $_degat = 0;
    private $_experience = 0;
    private $_force = 12;
    public $_bourse = 500;

    private static $_genre = 'humain';

    public function __construct($degat,$force)
    {
        // echo 'voici le constructeur';
        $this->set_degat($degat);
        $this->set_force($force);
        $this->_experience += 1;
    }

    const FORCE_MIN = 6;
    const FORCE_MAX = 36;

    public function gagnerExp(){
        echo "l'expérience de ce personnage vaut maintenant ";
        return $this->_experience = $this->_experience + 4;
    }

    /**
     * Get the value of _experience
     */ 
    public function get_experience()
    {
        return $this->_experience;
    }

    /**
     * Get the value of _degat
     */ 
    public function get_degat()
    {
        return $this->_degat;
    }

    /**
     * Get the value of _force
     */ 
    public function get_force()
    {
        return $this->_force;
    }

    // // Mutateur chargé de modifier l'attribut $_experience.
    // public function setExperience($experience)
    // {
    //     if (!is_int($experience)) // S'il ne s'agit pas d'un nombre entier.
    //     {
    //     trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
    //     return;
    //     }
        
    //     if ($experience > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
    //     {
    //     trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
    //     return;
    //     }
        
    //     $this->_experience = $experience;
    // }


    public function frapper(Personnage $cible){
        echo "ce personnage a infligé ";
        return $cible->_degat += $this->_force * 2;
    }

    /**
     * Set the value of _degat
     *
     * @return  self
     */ 
    public function set_degat($_degat)
    {
        $this->_degat = $_degat;

        return $this;
    }

    /**
     * Set the value of _experience
     *
     * @return  self
     */ 
    public function set_experience($_experience)
    {
        $this->_experience = $_experience;

        return $this;
    }

    /**
     * Set the value of _force
     *
     * @return  self
     */ 
    public function set_force($_force)
    {
        if (($_force < self::FORCE_MIN) || ($_force > self::FORCE_MAX))
        {
        trigger_error('valeurs non autorisées', E_USER_WARNING);
        return;
        }
        else{
            $this->_force = $_force;
        }
    }

    public static function afficheMoi(){
        echo '<br/><span style="color:red">ma static function : petit script de combat en POO</span><br/>';
        echo '<br>genre : '.self::$_genre.'<br>';
    }
}

$tarik = new Personnage(12,8);
// $boss = new Personnage(10,12);

// Personnage::afficheMoi();

// echo $tarik->frapper($boss).'<br>';
// echo $tarik->gagnerExp().'<br>';
// echo $boss->frapper($tarik).'<br>';
// echo $boss->gagnerExp().'<br>';

// echo $tarik->get_experience().'<br>';
// echo $tarik->get_degat().'<br>';
// echo $tarik->get_force().'<br>';

// echo $boss->get_experience().'<br>';
// echo $boss->get_degat().'<br>';
// echo $boss->get_force().'<br>';

// $bigboss = new Personnage(12,Personnage::FORCE_MAX);

// echo $bigboss->get_force().'<br>';
