<?php
declare(strict_types=1);

class loginControl extends loginModel{
    private $userLogin;
    private $userPassword;

    function __construct(string $userLogin, string $userPassword){
        $this->userLogin = $userLogin;
        $this->userPassword = $userPassword;
    }

    public function emptyLogin(){
        if (empty($this->userLogin) || empty($this->userPassword)){
            return true;
        }
        else{
            return false;
        }
    }
    public function wrongLogin(){
        $result = $this->getUser($this->userLogin);
        if(!$result){
            return true;
        }
        else{
            return false;
        }
    }
    public function wrongPassword(){
        $result = $this->getUser($this->userLogin);

        $hashedPassword = '';

        if ($result != false){
            $hashedPassword = $result['userPassword'];
        }
        
        $verification = password_verify($this->userPassword, $hashedPassword);
        if(!$verification){
            return true;
        }
        else{
            return false;
        }

    }
    public function setUser(){
        $result = $this->getUser($this->userLogin);
        return $result;
    }
}