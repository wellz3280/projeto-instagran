<?php
    namespace Weliton\Leks\Model\User;

class Email
{
    // classe retorna um bollean
    private string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
        $this->validateEmail($email);
    }

    public function getEmail()
    {
        return $this->email;
    }

    private function validateEmail(string $email):bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}


