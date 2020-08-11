<?php

    class ContactManager extends Database{
        public function __construct()
        {   
            parent::__construct();
        }

        public function selectAll()
        {
            $contacts = [];
            $sql = 'SELECT * FROM myContacts';
            foreach ($this->bdd->query($sql) as $row){
                $contacts[] = new Contact($row['id'],$row['name'],$row['tel'],$row['mail'],$row['picture']);
            }
            return $contacts;
        }

        public function insert(Contact $contact)
        {
            $name = $contact->getName();
            $tel = $contact->getTel();
            $mail = $contact->getMail();
            $picture = $contact->getPicture();
            $req = $this->bdd->prepare("INSERT INTO myContacts (name, tel, mail, picture) VALUES (?,?,?,?)");
            $req->bindParam(1, $name);
            $req->bindParam(2, $tel);
            $req->bindParam(3, $mail);
            $req->bindParam(4, $picture);
            $req->execute();
            $contact->setId($this->bdd->lastInsertId());
        }

        public function select($id)
        {
            $req = $this->bdd->prepare("SELECT * FROM myContacts WHERE id=?");
            $req->bindParam(1, $id);
            $req->execute();
            $res = $req->fetch();
            $contact = new Contact($res['id'], $res['name'], $res['tel'], $res['mail'],$res['picture']);
            return $contact;
        }

        public function delete($id)
        {
            $req = $this->bdd->prepare("DELETE FROM myContacts where id = ?");
            $req->bindParam(1,$id);
            $req->execute();
        }

        public function update(Contact $contact)
        {
            $name = $contact->getName();
            $tel = $contact->getTel();
            $mail = $contact->getMail();
            $picture = $contact->getPicture();
            $id = $contact->getId();
            $req = $this->bdd->prepare("UPDATE myContacts SET name = ?, tel = ?, mail = ?, picture = ? WHERE id = ?");
            $req->bindParam(1,$name);
            $req->bindParam(2,$tel);
            $req->bindParam(3,$mail);
            $req->bindParam(4,$picture);
            $req->bindParam(5,$id);
            $req->execute();
        }


//        public function update($id)
//        {
//            $contactManager = new ContactManager();
//            $contact = $contactManager->select($id);
//
//
//            $contact->setName($_POST['name']);
//            $contact->setMail($_POST['mail']);
//            $contact->setTel($_POST['tel']);
//            $contact->setPicture($_POST['picture']);
//            $contactManager->update($contact);
//
//            header('Location: index.php?controller=default&action=home');
//        }

        public function count(){
            $count = $this->bdd->query('SELECT COUNT(*) AS nb FROM myContacts');
            $res = $count->fetch();
            $nb = $res['nb'];
            return $nb;
        }


        public function orderBy()
        {
            $contacts = [];
            $sql = 'SELECT * FROM myContacts ORDER BY name';
            foreach ($this->bdd->query($sql) as $row){
                $contacts[] = new Contact($row['id'],$row['name'],$row['tel'],$row['mail'],$row['picture']);
            }

//            var_dump($contacts);
            return $contacts;
        }

        public function orderByDesc(){
            $contacts = [];
            $sql = 'SELECT * FROM myContacts ORDER BY name DESC';
            foreach ($this->bdd->query($sql) as $row){
                $contacts[] = new Contact($row['id'],$row['name'],$row['tel'],$row['mail'],$row['picture']);
            }

//            var_dump($contacts);
            return $contacts;
        }

        public function getColor($data){
            if ($data >= 0 && $data < 10){
                $color = 'orange';
            }
            else if ($data >= 10){
                $color = 'red';
            }
            return $color;
        }
    }

?>