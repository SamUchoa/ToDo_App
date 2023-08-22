<?php
declare(strict_types=1);
class tasksControl extends tasksModel{
    public function myTasks(){
        $tasks = $this->getTasks();
        return $tasks;
    }
}