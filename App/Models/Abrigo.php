<?php

namespace App\Models;

use MyFramework\Model\Model;

class Abrigo extends Model
{
    protected $table = 'abrigo';
    	
    private $abrigo_id;
    private $abrigo_name;
    private $abrigo_email;
    private $abrigo_telefone;
    private $abrigo_endereco;

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
        $attributes = "'$this->abrigo_name', '$this->abrigo_email', '$this->abrigo_telefone', '$this->abrigo_endereco'";
        return $attributes;
    }
}

?>