<?php

class User{
    private $email;
    private $username;
    private $password;
    private $confirmPass;
    private $role;

    public function __construct($email,$username,$password,$confirmPass,$role){
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->confirmPass = $confirmPass;
        $this->role = $role;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getUserName(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getConfirmPass(){
        return $this->confirmPass;
    }
    public function getRole(){
        return $this->role;
    }
}