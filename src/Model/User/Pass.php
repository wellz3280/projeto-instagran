<?php
    namespace Weliton\Leks\Model\User;

use ErrorException;
use Exception;

class Pass
{
    private string $password;

    public function __construct(string $password)
    {
        $this->password = $password;
        $this->hashPass($password);
    }

    /*
        verifica se a senha tem entre 8 e 16 caracteres
        verifica se a senha tem pelo menos uma letra maiuscula e um numero
     */ 
    private function validatePass(string $password):bool
    {
        return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[\w$@]{8,16}$/', $password);
    }

    public function hashPass():string|bool
    {   
        $password = $this->validatePass($this->password);
        
        if($password){
            return $hash = md5($this->password);

        }else{
           throw new ErrorException('Senha Invalida');
        }
    }
}