<?php

class UserValidator
{
    public function validateUser(array $userData): bool
    {
    
        return $this->validatePassword($userData['password']) 
        && $this->validateEmail($userData['email']);
    }



    private function validateEmail(string $email): bool
    {
        if(strlen($email) > 7) {
            return false;
        }
        
        return true;
    }
    

    private function validatePassword(string $password): true
    {
        return true;
    }
}