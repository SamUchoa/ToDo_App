<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $userLogin = $_POST['userLogin'];
    $userPassword = $_POST['userPassword'];

    try {
        require_once '../database/db_inc.php';
        require_once '../classes/login_model_classes.php';
        require_once '../classes/login_control_classes.php';
        
        $login = new loginControl($userLogin, $userPassword);

        $errors = [];

        if ($login->emptyLogin()) {
            $errors['campoVazio'] = 'Preencha todos os campos';
        }
        if ($login->wrongLogin() || $login->wrongPassword()){
            $errors['loginIncorreta'] = 'Dados incorretos';
        }

        require '../sessionConfig.php';

        if ($errors) {
            $_SESSION['errors'] = $errors;
            header('location: ../../login.php');
            die();
        }

        $user = $login->setUser();
        $_SESSION['userId'] = $user['userId'];
        $_SESSION['userName'] = htmlspecialchars($user['userName']);

        $_SESSION['lastlastRegeneration'] = time();
        
        header('location: ../../login.php');
        die();


    } catch (PDOException $e) {
        die('Falha na consulta: ' . $e->getMessage());
    }

} else{
    header('location: ../../login.php');
    die();
}