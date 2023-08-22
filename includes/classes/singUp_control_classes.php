<?php
declare(strict_types=1);

class singUpControl extends singUpModel{
    private $userName;
    private $userEmail;
    private $userPassword;
    private $passwordRepeat;
    public function __construct($userName, $userEmail, $userPassword, $passwordRepeat){
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userPassword = $userPassword;
        $this->passwordRepeat =  $passwordRepeat;

    }
    public function emptyInput(){
        if (empty($this->userName) || empty($this->userEmail) || empty($this->userPassword) || empty($this->passwordRepeat)) {
            return true;
        }   
        else{
            return false;
        }
    }

    public function invalidName(){
        if (preg_match('/[^a-zA-ZÁ-ÿ]/', $this->userName)){
            return true;
        }
        else{
            return false;
        }
    }
    public function usrNameExists(){
        if ($this->getUserName($this->userName) != false){
            return true;
        }
        else {
            return false;
        }
    }
    public function invalidEmail(){
        if (!filter_var($this->userEmail, FILTER_VALIDATE_EMAIL)) {
            return true;
        }   
        else{
            return false;
        }
    }
    public function usrEmailExists(){
        if ($this->getUserEmail($this->userEmail) != false){
            return true;
        }
        else {
            return false;
        }
    }

    public function invalidPassword(){
        if (strlen($this->userPassword) < 8 || !preg_match('/[a-zA-Z]/', $this->userPassword) || !preg_match('/[0-9]/', $this->userPassword)) {
            return true;
        }
        else{
            return false;
        }
    }
    public function matchingPasswords(){
        if ($this->userPassword != $this->passwordRepeat) {
            return true;
        }
        else{
            return false;
        }
    }

    public function createUser(){
        $options = [
        "cost" => 12
        ];
        $hashedPassword = password_hash($this->userPassword, PASSWORD_BCRYPT, $options);
        $this->setUser($this->userName, $this->userEmail, $hashedPassword   );
    }
    
}