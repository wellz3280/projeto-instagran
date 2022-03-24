<?php
    namespace Weliton\Leks\Model\User;

class Phone
{
    private string $phone;

    public function __construct(string $phone)
    {
        $this->phone= $phone;
    }

    private function validatePhone(string $phone):bool
    {
        return preg_match('/^[0-9]{2}[0-9]{5}-[0-9]{4}$/',$phone,$search);
    }

    public function setPhone(string $phone):void
    {
        $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }
}