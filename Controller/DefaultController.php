<?php

class DefaultController{

    public function home(){
        $contactManager = new ContactManager();
        $data = new ContactManager();
        $data->count();
        $contacts = $contactManager->selectAll();
        require ('View/home.php');
    }

    public function orderByName(){
        $contactManager = new ContactManager();
        $contacts = $contactManager->selectAll();
        $contacts = $contactManager->orderBy();
    }
}

