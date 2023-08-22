<?php
class user{
    private $userName;
    private $userEmail;
    private $userPassword;

    function __construct($userName, $userEmail, $userPassword){
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userPassword = $userPassword;
    }
}