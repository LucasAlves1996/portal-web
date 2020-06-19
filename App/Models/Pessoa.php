<?php

namespace App\Models;

use MyFramework\Model\Model;

class Pessoa extends Model
{
    protected $table = 'pessoa';
    	
    private $pessoa_id;
    private $pessoa_name;
    private $pessoa_data_nascimento;
    private $pessoa_email;
    private $pessoa_telefone;
    private $pessoa_endereco;
    private $pessoa_habilidades;
    private $abrigo_id;
    private $empresa_id;

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
        $attributes = "'$this->pessoa_name', '$this->pessoa_data_nascimento', '$this->pessoa_email', '$this->pessoa_telefone',
            '$this->pessoa_endereco', '$this->pessoa_habilidades', $this->abrigo_id, $this->empresa_id";
        return $attributes;
    }

    public function getPessoa($post)
    {
        $id = $post['id'];

        $sql = "SELECT * FROM pessoa WHERE pessoa_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $pessoa = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $pessoa;
    }

    public function update()
    {
        $sql = "UPDATE pessoa SET pessoa_name = :nome, pessoa_data_nascimento = :data_nascimento, pessoa_email = :email,
            pessoa_telefone = :telefone, pessoa_endereco = :endereco, pessoa_habilidades = :habilidades, abrigo_id = :abrigo,
            empresa_id = :empresa WHERE pessoa_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $this->pessoa_id);
        $stmt->bindValue(':nome', $this->pessoa_name);
        $stmt->bindValue(':data_nascimento', $this->pessoa_data_nascimento);
        $stmt->bindValue(':email', $this->pessoa_email);
        $stmt->bindValue(':telefone', $this->pessoa_telefone);
        $stmt->bindValue(':endereco', $this->pessoa_endereco);
        $stmt->bindValue(':habilidades', $this->pessoa_habilidades);
        $stmt->bindValue(':abrigo', $this->abrigo_id);
        $stmt->bindValue(':empresa', $this->empresa_id);
        $stmt->execute();
    }

    public function filtro($valor1, $atributo1, $valor2, $atributo2)
    {
        if($valor1 != '' && $valor2 != '')
        {
            $sql = "SELECT * FROM $this->table WHERE $atributo1 = $valor1 AND $atributo2 = $valor2";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        }
        else if($valor1 != '')
        {
            $sql = "SELECT * FROM $this->table WHERE $atributo1 = $valor1";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        }
        else
        {
            $sql = "SELECT * FROM $this->table WHERE $atributo2 = $valor2";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        }

        return $stmt->fetchAll();
    }
}

?>