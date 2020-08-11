<?php

class ContactController{
    public function addForm(){
        require ('View/insertForm.php');
    }

    public function InsertOnSubmit()
    {
        $errors = [];
        $contact = new Contact(null, $_POST['name'], $_POST['tel'], $_POST['mail'],$_POST['picture']);
//        var_dump($_POST);
        if(empty($_POST['name'])){
            $errors[] = 'erreur : le champ nom est requis ! ';
        }
        if(!ctype_alpha($_POST['name'])){
            $errors[] = 'erreur : le champ nom ne doit contenir que des lettres';
        }
        if(empty($_POST['mail'])){
            $errors[] = 'erreur : le champ mail est requis ! ';
        }
//        if(!ctype_alpha($_POST['mail'])){
//            $errors[] = 'erreur : le champ mail ne doit contenir que des lettres';
//        }
        if (count($errors) === 0) {
            $contactManager = new ContactManager();
            $contactManager->insert($contact);
            header('Location: /tp_open/index.php?controller=default&action=home');
        }
        else{
//            var_dump($errors);
            require('View/insertForm.php');
        }
    }

    public function delete($id)
    {
        $contactManager = new ContactManager();
        $contactManager->delete($id);
        header('Location: /tp_open/index.php?controller=default&action=home');
    }

    public function getThisById($id){
        $contactManager = new ContactManager();
        $contact = $contactManager->select($id);
        require ('View/details.php');
    }

    public function updateForm($id)
    {
        $contactManager = new ContactManager();
        $contact = $contactManager->select($id);
        require ('View/updateForm.php');
    }


    public function updateContact($id)
    {
        $errors = [];
        $contactManager = new ContactManager();
        $contact = $contactManager->select($id);
        $contact = new Contact($id,$_POST['name'], $_POST['tel'], $_POST['mail'], $_POST['picture']);

        if(empty($_POST['name'])){
            $errors[] = 'erreur : le champ nom est requis ! ';
        }
        if(!ctype_alpha($_POST['name'])){
            $errors[] = 'erreur : le champ nom ne doit contenir que des lettres';
        }
        if(empty($_POST['mail'])){
            $errors[] = 'erreur : le champ mail est requis ! ';
        }
//        if(!ctype_alpha($_POST['mail'])){
//            $errors[] = 'erreur : le champ mail ne doit contenir que des lettres';
//        }
        if (count($errors) === 0) {
            $contactManager->update($contact);
            header('Location: /tp_open/index.php?controller=default&action=home');
        }
        else{
//            var_dump($errors);
            require('View/updateForm.php');
        }
    }

    public function getStringRandom(){
        $contactManager = new ContactManager();
        echo $contactManager->stringRandom();
    }
}

?>