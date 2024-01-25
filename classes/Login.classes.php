<?php

class Login extends DatabaseConnection{

    // check if user exists
    protected function getUser($username,$password){
        $stm = $this->connect()->prepare("SELECT password FROM users WHERE username = ? OR email = ?");

        if(!$stm->execute(array($username,$username))){
            $stm = null;
            header("location: ../projekti-web/login.php?=stmfailed");
            exit();
        }
        if($stm->rowCount() == 0){
            $stm = null;
            header("location: ../projekti-web/login.php?=usernotfound");
            exit();            
        }
        $pwdhashed = $stm->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($password,$pwdhashed[0]["password"]);

        if($checkPwd == false){
            $stm = null;
            header("location: ../projekti-web/login.php?=wrongpassword");
            exit(); 
        }else if($checkPwd == true){
            $stm = $this->connect()->prepare("SELECT * FROM users WHERE username=? OR email=? AND password=?;");

            if(!$stm->execute(array($username,$username,$pwdhashed[0]["password"]))){
                $stm = null;
                header("location: ../projekti-web/login.php?=stmfailed");
                exit();
            }
            if($stm->rowCount() == 0){
                $stm = null;
                header("location: ../projekti-web/login.php?=usernotfound");
                exit();    
            }
            $user = $stm->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["id"];
            $_SESSION["useruid"] = $user[0]["username"];
            $_SESSION["role"] = $user[0]["role"];
            $stm = null;
        }   

    }
}