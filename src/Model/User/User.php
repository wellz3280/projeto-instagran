<?php
    namespace Weliton\Leks\Model\User;

use DateTime;

class User
{
    // apelidos pode vir vazia e pode ser alterado
    private string $name;
    private string $lastName;
    private ?string $alias;
    private DateTime $birthDate;

    public function __construct(string $name,string $lastName,?string $alias,DateTime $birthDate)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->alias = $alias;
        $this->birthDate = $birthDate;
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

