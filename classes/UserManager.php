<?php

class UserManager extends DatabaseConnection{

    private $validator;

    public function __construct(){
        $this->validator = new UserValidator();
    }
    public function signupUser($user){
        if($this->validator->validateUser($user) !== null){
            header(`location: ../register.php?={$this->validator->validateUser($user)}`);
            exit();
        }else if(!$this->checkUser($user)){
            header("location: ../ProjektiWeb/register.php?error=usertaken");
            exit();
        }
        
        $stm = $this->connect()->prepare('INSERT INTO users (email,username,password,role) VALUES (?, ?, ?, ?);');
        
        $hashedPass = password_hash($user->getPassword(),PASSWORD_DEFAULT);
        
        if(!$stm->execute(array($user->getEmail(),$user->getUsername(),$hashedPass,$user->getRole()))){
            $stm = null;
            header("location: ../register.php?=error=stmfailed");
            exit();
        }
        
    }
    
    //check if user already exists
    private function checkUser($user){
        $stm = $this->connect()->prepare('SELECT username FROM users WHERE username=? OR email=?;');
    
        if(!$stm->execute(array($user->getUsername(),$user->getEmail()))){
            $stm = null;
            header("location: ../register.php?=stmfailed");
            exit();
        }
        if($stm->rowCount()>0){
            return false;
        }else{
            return true;
        }
    }
    //return all users from the database
    public function getAllUsers(){
        $stm = $this->connect()->prepare('SELECT * FROM users');
        $stm->execute();

        $users = $stm->fetchAll();
        return $users;
    }
    public function updateUser($id,$email,$username,$password,$role){
        $stm = $this->connect()->prepare("UPDATE users SET email=?, username=?, password=?, role=? WHERE id=?");
        $hashedPass = password_hash($password,PASSWORD_DEFAULT);

        if(!$stm->execute(array($email,$username,$hashedPass,$role,$id))){
            $stm = null;
            header("location: edit.php?=stmfailed");
            exit();
        }
    }
    
    public function deleteUser($id){
        $stm = $this->connect()->prepare("DELETE FROM users WHERE id=?");

        if(!$stm->execute(array($id))){
            $stm = null;
            
            header("location: edit.php?=stmfailed");
            exit();
        }

    }
}
