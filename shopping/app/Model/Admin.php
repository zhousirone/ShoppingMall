<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
//use App\Model\Role;
class Admin extends Model
{
    public $timestamps=false;
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'admin_role', 'admin_id', 'role_id');
    }

}
