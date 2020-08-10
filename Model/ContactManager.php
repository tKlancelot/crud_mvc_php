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
                $contacts[] = new Contact($row['id'],$row['name'],$row['tel'],$row['mail']);
            }
            return $contacts;
        }

        public function insert(Contact $contact)
        {
            $name = $contact->getName();
            $tel = $contact->getTel();
            $mail = $contact->getMail();
            $req = $this->bdd->prepare("INSERT INTO myContacts (name, tel, mail) VALUES (?,?,?)");
            $req->bindParam(1, $name);
            $req->bindParam(2, $tel);
            $req->bindParam(3, $mail);
            $req->execute();
            $contact->setId($this->bdd->lastInsertId());
        }

        public function select($id)
        {
            $req = $this->bdd->prepare("SELECT * FROM myContacts WHERE id=?");
            $req->bindParam(1, $id);
            $req->execute();
            $res = $req->fetch();
            $contact = new Contact($res['id'], $res['name'], $res['tel'], $res['mail']);

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
            $id = $contact->getId();
            $req = $this->bdd->prepare("UPDATE myContacts SET name = ?, tel = ?, mail = ? WHERE id = ?");
            $req->bindParam(1,$name);
            $req->bindParam(2,$tel);
            $req->bindParam(3,$mail);
            $req->bindParam(4,$id);
            $req->execute();
        }

        public function count(){
            $count = $this->bdd->query('SELECT COUNT(*) AS nb FROM myContacts');
            $res = $count->fetch();
            $nb = $res['nb'];
            return $nb;
        }
    }

?>