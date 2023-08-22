<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    $passwordRepeat = $_POST['passwordRepeat'];
    try {
        require_once '../database/db_inc.php';
        require_once '../classes/singUp_model_classes.php';
        require_once '../classes/singUp_control_classes.php';

        $user = new singUpControl($userName, $userEmail, $userPassword, $passwordRepeat);

        $errors = [];

        if ($user->emptyInput()) {
            $errors['campoVazio'] ='Preencha todos os campos';
        }
        if ($user->invalidName()){
            $errors['nomeInvalido'] ='Insira um nome válidos, apenas letras';
        }
        if ($user->usrNameExists()){
            $errors['nomeJaExiste'] = 'Esse nome de usuário já existe';
        }
        if ($user->invalidEmail()){
            $errors['emailInvalido'] ='Insira um email válido';
        }
        if ($user->usrEmailExists()){
            $errors['emailJaExiste'] = 'Esse email já está em uso';
        }
        if ($user->invalidPassword()){
            $errors['senhaInvalida'] = 'Sua senha deve conter no mínimo 8 caracteres e entre eles deve haver pelo menos uma letra e um número';
        }
        if ($user->matchingPasswords()){
            $errors['senhasDiferentes'] = 'As senhas não batem';
        }

            require '../sessionConfig.php';

        if ($errors) {
             $_SESSION['errors'] = $errors;
             header('location: ../../index.php');
             die();
        }

        $user->createUser();

        header('location: ../../index.php');


        die();

    } catch (PDOException $e) {
        die("Falha na consulta: " . $e->getMessage());
    }


}else{
    header('location: ../../index.php');
    die();
}