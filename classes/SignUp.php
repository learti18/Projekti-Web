<?php

class SignUp extends DatabaseConnection{
    
    protected function insertUser($email,$username,$password){
        $stm = $this->connect()->prepare('INSERT INTO users (email,username,password) VALUES (?, ?, ?);');
        
        $hashedPass = password_hash($password,PASSWORD_DEFAULT);
        
        if(!$stm->execute(array($email,$username,$hashedPass))){
            $stm = null;
            header("location: ../register.php?=error=stmfailed");
            exit();
        }
    }
    protected function insertAdmin($email,$username,$password){
        $stm = $this->connect()->prepare("INSERT INTO users (email,username,password,role) VALUES (?,?,?,?);");

        $hashedPass = password_hash($password,PASSWORD_DEFAULT);

        if(!$stm->execute(array($email,$username,$hashedPass,"admin"))){
            $stm = null;
            header("location: ../register.php?=error=stmfailed");
            exit();
        }
    }
    protected function checkUser($username,$email){
        $stm = $this->connect()->prepare('SELECT username FROM users WHERE username=? OR email=?;');
    
        if(!$stm->execute(array($username,$email))){
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
}