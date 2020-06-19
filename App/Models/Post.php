<?php

namespace App\Models;

use MyFramework\Model\Model;

class Post extends Model
{
    protected $table = 'post';

    private $post_title;
    private $post_content;
    private $post_user_id;

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
        $attributes = "$this->post_title, $this->post_content, $this->post_user_id";
        return $attributes;
    }
}

?>