<?php
declare(strict_types=1);
class tasksModel extends dbConnect{
    protected function getTasks(){

        $taskOwner = $_SESSION['userId'];
        $query = 'SELECT * FROM Tasks WHERE userId = :taskOwner';

        $stmt = $this->connect()->prepare($query);

        $stmt->bindParam(':taskOwner', $taskOwner);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}