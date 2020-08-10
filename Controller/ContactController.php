<?php

class ContactController{
    public function addForm(){
        require ('View/insertForm.php');
    }

    public function InsertOnSubmit()
    {
        $contact = new Contact(null, $_POST['name'], $_POST['tel'], $_POST['mail'],$_POST['picture']);
        $contactManager = new ContactManager();
        $contactManager->insert($contact);
        header('Location: /tp_open/index.php?controller=default&action=home');
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
        $contactManager = new ContactManager();
        $contact = $contactManager->select($id);
        $contact = new Contact($id,$_POST['name'], $_POST['tel'], $_POST['mail'], $_POST['picture']);
        $contactManager->update($contact);

        header('Location: /tp_open/index.php?controller=default&action=home');
    }

}

?>