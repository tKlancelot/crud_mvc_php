<?php

class DefaultController{

    public function home(){
        $contactManager = new ContactManager();
        $data = new ContactManager();
        $data->count();
        $contacts = $contactManager->selectAll();
        require ('View/home.php');
    }

}