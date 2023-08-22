<?php
declare(strict_types=1);

class newTaskModel extends dbConnect {
    protected function insertTask(string $taskTitle,  string $taskContent, int | string $taskOwner){
        
        $query = 'INSERT INTO tasks (userId, taskTitle, taskContent) VALUES(:taskOwner, :taskTitle, :taskContent)';

        $stmt = $this->connect()->prepare($query);

        $stmt->bindParam(':taskOwner', $taskOwner);
        $stmt->bindParam(':taskTitle', $taskTitle);
        $stmt->bindParam(':taskContent', $taskContent);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    protected function getTasks(int | string $taskOwner){
        
        $query = 'SELECT * FROM Tasks WHERE userId = :taskOwner';

        $stmt = $this->connect()->prepare($query);

        $stmt->bindParam(':taskOwner', $taskOwner);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}