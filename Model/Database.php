<?php

class Database{
    protected $bdd;
    private $host = 'localhost';
    private $dbname = 'contacts';
    private $username = 'root';
    private $password = '';

    public function __construct(){
        try{
            $this->bdd = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->username,$this->password);
//            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(Exception $e) {
                die('Erreur '.$e->getMessage());
        }
    }
}

?>