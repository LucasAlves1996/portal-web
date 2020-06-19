<?php

namespace App\Models;

use MyFramework\Model\Model;

class Empresa extends Model
{
    protected $table = 'empresa';
    	
    private $empresa_id;
    private $empresa_name;
    private $empresa_email;
    private $empresa_telefone;
    private $empresa_cnpj;

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }

    protected function getObjectAttributes()
    {
        $attributes = "'$this->empresa_name', '$this->empresa_email', '$this->empresa_telefone', '$this->empresa_cnpj'";
        return $attributes;
    }
}

?>