<?php

class UserRepository
{
    private PDO $PDO;

    public function __construct(PDO $PDO)
    {
        $this->PDO = $PDO;
    }

    public function saveUser(User $user): void
    {
       

        $query = 'INSERT INTO abc(email, password) VALUES (:email, :password)';

        $stmt = $this->PDO->prepare($query);  

        $stmt->execute(['email'->$user->getEmail(), 'password' => $user->getPassword()]);
    }
}

