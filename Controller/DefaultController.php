<?php

class DefaultController{

    public function home(){
        $contactManager = new ContactManager();
        $contacts = $contactManager->selectAll();
        require ('View/home.php');
    }

}