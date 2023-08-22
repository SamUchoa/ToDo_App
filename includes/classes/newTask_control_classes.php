<?php
declare(strict_types=1);

class newTaskControl extends newTaskModel{
    private $taskTitle;
    private $taskContent;
    private $taskOwner;

    public function __construct($taskTitle, $taskContent, $taskOwner){
        $this->taskTitle = $taskTitle;
        $this->taskContent = $taskContent;
        $this->taskOwner = $taskOwner;
    }

    public function emptyInput(){
        if (empty($this->taskTitle) || empty($this->taskContent)) {
            return true;
        }   
        else{
            return false;
        }
    }

    public function createTask(){
        $title = $this->taskTitle;
        $content = $this->taskContent;
        $owner = $this->taskOwner;
        $this->insertTask($title, $content, $owner);

    }

    public function myTasks(){
        $id = $this->taskOwner;
        $tasks = $this->getTasks($id);
        return $tasks;
    }

}