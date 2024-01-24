<?php

class LoginContr extends Login{
    private $username;
    private $password;


    public function __construct($username,$password){
        $this->username = $username;
        $this->password = $password;
    }

    public function loginUser(){
        if($this->emptyInput()==false){
            header("location: ../projekti-web/login.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->username,$this->password);
    }
    private function emptyInput(){
        if(empty($this->username) || empty($this->password)){
            return  false;
        }else{
            return true;
        }
    }
}