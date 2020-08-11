<?php

class DefaultController{

    private  $contactManager;

    public function __construct(){
        $this->contactManager = new ContactManager();
    }

    public function home(){
        $data = $this->contactManager->count();
        $contacts = $this->contactManager->selectAll();
        $color = $this->contactManager->getColor($data);
        require ('View/home.php');
    }

    public function orderByNameAsc(){
        $data = $this->contactManager->count();
        $contacts = $this->contactManager->orderBy();
        $color = $this->contactManager->getColor($data);
        require ('View/home.php');
    }

    public function orderByNameDesc(){
        $data = $this->contactManager->count();
        $color = $this->contactManager->getColor($data);
        $contacts = $this->contactManager->orderByDesc();

        require ('View/home.php');
    }
}

