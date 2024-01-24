<?php

class SignupController extends SignUp{
    private $email;
    private $username;
    private $password;
    private $confirmPass;
    private $role;

    public function __construct($email,$username,$password,$confirmPass){
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->confirmPass = $confirmPass;
    }

    public function signupUser(){
        if($this->emptyInput() == false){
            header("location: ../ProjektiWeb/register.php?error=emptyinput");
            exit();
        }
        if($this->invalidUser() == false){
            header("location: ../ProjektiWeb/register.php?error=invaliduser");
            exit();
        }
        if($this->invalidEmail() == false){
            header("location: ../ProjektiWeb/register.php?error=invalidemail");
            exit();
        }
        if($this->passwordMatch() == false){
            header("location: ../ProjektiWeb/register.php?error=passwordsdontmatch");
            exit();
        }
        if($this->userTaken() == false){
            header("location: ../ProjektiWeb/register.php?error=usertaken");
            exit();
        }

        $this->insertUser($this->email,$this->username,$this->password);
    }
    public function signupAdmin(){
        if($this->emptyInput() == false){
            header("location: ../ProjektiWeb/register.php?error=emptyinput");
            exit();
        }
        if($this->invalidUser() == false){
            header("location: ../ProjektiWeb/register.php?error=invaliduser");
            exit();
        }
        if($this->invalidEmail() == false){
            header("location: ../ProjektiWeb/register.php?error=invalidemail");
            exit();
        }
        if($this->passwordMatch() == false){
            header("location: ../ProjektiWeb/register.php?error=passwordsdontmatch");
            exit();
        }
        if($this->userTaken() == false){
            header("location: ../ProjektiWeb/register.php?error=usertaken");
            exit();
        }

        $this->insertAdmin($this->email,$this->username,$this->password);
    }
    private function emptyInput(){
        if(empty($this->username) || empty($this->email) || empty($this->password) || empty($this->confirmPass)){
            return  false;
        }else{
            return true;
        }
    }
    private function invalidUser(){
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->username)){
            return false;
        }else{
            return true;
        }
    }
    private function invalidEmail(){
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            return false;
        }else{
            return true;
        }
    }
    private function passwordMatch(){
        if($this->password !== $this->confirmPass){
            return false;
        }else{
            return true;
        }
    }
    private function userTaken(){
        if(!$this->checkUser($this->username,$this->email)){
            return false;
        }else{
            return true;
        }
    }

}
