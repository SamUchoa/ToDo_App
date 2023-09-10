<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $action = $_POST;

    try {
        require_once '../database/db_inc.php';
        require_once '../classes/tasks_model_classes.php';
        require_once '../classes/tasks_control_classes.php';
        
        $taskModify = new tasksControl();

        if (isset($action['delete'])){
            $taskModify->removeTasks($action['delete']);
        }

        $_SESSION['lastlastRegeneration'] = time();
        
        header('location: ../../myTasks.php');  
        die();


    } catch (PDOException $e) {
        die('Falha na consulta: ' . $e->getMessage());
    }

} else{
    header('location: ../../login.php');
    die();
}