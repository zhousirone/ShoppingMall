<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps=false;
    public function powers()
    {
        return $this->belongsToMany(Power::class, 'role_power', 'role_id', 'power_id');
    }
}
