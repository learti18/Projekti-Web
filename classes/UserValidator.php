<?php 

class UserValidator{

    public function validateUser($user){
        $error = null;

        if($this->emptyInput($user) == false){
            $error = "emptyInput";
        }
        if($this->invalidUser($user) == false){
            $error = "invaliduser";
        }
        if($this->invalidEmail($user) == false){
            $error = "invalidemail";
        }
        if($this->passwordMatch($user) == false){
            $error = "passwordsdontmatch";
        }

        return $error;
        // if($this->userTaken() == false){
        //     header("location: ../ProjektiWeb/register.php?error=usertaken");
        //     return false;
        // } 
    }
    // user validation
    private function emptyInput($user){
        if(empty($user->getUsername()) || empty($user->getEmail()) || empty($user->getPassword()) || empty($user->getConfirmPass())){
            return  false;
        }else{
            return true;
        }
    }
    //
    private function invalidUser($user){
        if(!preg_match("/^[a-zA-Z0-9]*$/",$user->getUsername())){
            return false;
        }else{
            return true;
        }
    }
    private function invalidEmail($user){
        if(!filter_var($user->getEmail(),FILTER_VALIDATE_EMAIL)){
            return false;
        }else{
            return true;
        }
    }
    private function passwordMatch($user){
        if($user->getPassword() !== $user->getConfirmPass()){
            return false;
        }else{
            return true;
        }
    }
    // private function userTaken($user){
    //     if(!$this->checkUser($this->username,$this->email)){
    //         return false;
    //     }else{
    //         return true;
    //     }
    // }
}