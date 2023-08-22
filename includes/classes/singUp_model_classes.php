<?php
declare(strict_types=1);

class singUpModel extends dbConnect{

    protected function getUserName(string $userName){
        $query = 'SELECT userName FROM users WHERE userName = :userName;';
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(':userName', $userName);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    protected function getUserEmail(string $userEmail){
        $query = 'SELECT userEmail FROM users WHERE userEmail = :userEmail;';
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(':userEmail', $userEmail);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    protected function setUser(string $userName, string $userEmail, string $hashedPassword){
        $query = 'INSERT INTO users(userName, userEmail, userPassword) VALUES(:userName, :userEmail, :userPassword);';
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(':userName', $userName);
        $stmt->bindParam(':userEmail', $userEmail);
        $stmt->bindParam(':userPassword', $hashedPassword);
        $stmt->execute();

    }
}