<?php

namespace App\Models;

use MyFramework\Model\Model;

class Module extends Model
{
    protected $table = 'module';

    public function getPermissions()
    {
        $this->table = 'module_permission_type';
        return $this->read();
    }
}

?>