<?php
declare(strict_types=1);
class tasksControl extends tasksModel{
    public function myTasks(){
        $tasks = $this->getTasks();
        return $tasks;
    }
    public function removeTasks($taskId){
        $this->deleteTasks($taskId);
    }
    public function editTasks($taskId , $newContent){
        $this->updateTasks($taskId, $newContent);
    }
}