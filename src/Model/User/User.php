<?php
    namespace Weliton\Leks\Model\User;

use DateTime;

abstract class User
{
    
    protected string $name;
    protected string $lastName;
    protected ?string $alias; // apelidos pode vir vazia e pode ser alterado
    protected DateTime $birthDate;
    protected Email $email;
    protected Phone $phone;
    protected Pass $pass;

    public function __construct(
        string $name,
        string $lastName,
        ?string $alias,
        DateTime $birthDate,
        Email $email,
        Phone $phone,
        Pass $pass
    )
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->alias = $alias;
        $this->birthDate = $birthDate;
        $this->email = $email;
        $this->phone = $phone;
        $this->pass = $pass;
    }

    public function getName():string
    {
        return $this->name;
    }
    
    public function getLastName():string
    {
        return $this->lastName;
    }

    public function setAlias(string $alias):void
    {
        $this->alias = $alias;
    }

    public function getAlias():string
    {
        return $this->alias;
    }

    public function getbirthDate():string
    {
        return $this->birthDate->format('d/m/Y');
       
    }

    // Mostra a idade atual do Usuario
    public function age():string
    {
        $hj = date('Y');
        $year = explode('/',$this->getbirthDate());
        return $hj - $year[2];
    }   

}

