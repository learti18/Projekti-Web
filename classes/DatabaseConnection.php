<?php

class DatabaseConnection{
    private $host = "localhost";
    private $dbname = "treloo";
    private $username = "root";
    private $password = "";

    protected function connect(){
        try{
            $conn = new PDO("mysql:host=$this->host; dbname=$this->dbname",
                $this->username,$this->password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

            if(!$conn){
                return null;
            }else{
                return $conn;
            }

        }catch(PDOException $pdoe){
            echo `Connection failed {$pdoe}`;
        }
    }


}