<?php
declare(strict_types=1);

require_once 'includes/database/db_inc.php';
require_once 'includes/classes/tasks_model_classes.php';
require_once 'includes/classes/tasks_control_classes.php';

function taskOutput(){
    $taskView = new tasksControl();
    return $taskView->myTasks();
}