<?php

class ContactUs extends DatabaseConnection{


    public function sendMessage($fullName,$email,$messages){
        $stm = $this->connect()->prepare("INSERT INTO contactUs (fullname,email,message) VALUES (?,?,?)");
        if($fullName !== null && $email !== null && $messages !== null){
            if(!$stm->execute(array($fullName,$email,$messages))){
                $stm = null;
                header("location: reviewsDashboard.php?=stmfailed");
                exit();
            }
        }
    }
    public function getMessages(){
        $stm = $this->connect()->prepare("SELECT * FROM contactUs");
        $stm->execute();
        $messages = $stm->fetchAll();

        return $messages;
    }
    public function deleteMessage($id){
        $stm = $this->connect()->prepare("DELETE FROM contactUs WHERE id=?");
        $stm->execute(array($id));
    }
}