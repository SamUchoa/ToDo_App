<?php
declare(strict_types=1);

class loginModel extends dbConnect{
    protected function getUser(string $userLogin){
        $query = 'SELECT * FROM users WHERE userName = :userLogin OR userEmail = :userLogin;';
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(':userLogin', $userLogin);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}