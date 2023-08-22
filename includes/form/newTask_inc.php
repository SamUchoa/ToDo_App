<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../sessionConfig.php';
    $taskTitle = htmlspecialchars($_POST['taskTitle']);
    $taskContent = htmlspecialchars($_POST['taskContent']);
    $taskOwner = $_SESSION['userId'];


    try{
        require_once '../database/db_inc.php';
        require_once '../classes/newTask_model_classes.php';
        require_once '../classes/newTask_control_classes.php';

        $createTask = new newTaskControl($taskTitle, $taskContent, $taskOwner);

        $errors = [];

        if ($createTask->emptyInput()) {
            $errors['campoVazio'] ='Preencha todos os campos';
        }

        if ($errors) {
             $_SESSION['errors'] = $errors;
             header('location: ../../newTask.php');
             die();
        }

        $createTask->createTask();

        session_regenerate_id(true);

        header('location: ../../myTasks.php');

        die();
    }
    catch (PDOException $e) {
        die('Falha na conexão: ' . $e->getMessage());
    }
} else{
    header('location: ../../myTasks.php');
    die();
}