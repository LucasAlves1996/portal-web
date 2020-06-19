<?php

namespace App\Models;

use MyFramework\Model\Model;

class User extends Model
{
    protected $table = 'user';
    	
    private $user_id;
    private $user_name;
    private $user_email;
    private $user_login;
    private $user_password;
    private $permission_id;

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
        $attributes = "'$this->user_name', '$this->user_email', '$this->user_login', '$this->user_password', $this->permission_id";
        return $attributes;
    }

    public function auth($post)
    {
        $usuario = $post['usuario'];
        $senha = $post['senha'];

        $query = "SELECT * FROM user WHERE user_login = :usuario OR user_email = :usuario AND user_password = :senha";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':usuario', $usuario);
        $stmt->bindValue(':senha', $senha);
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $user;
    }
}

?>