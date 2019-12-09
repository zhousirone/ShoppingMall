<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Power extends Model
{
    public $timestamps=false;
    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'power_menu', 'power_id', 'menu_id');
    }
}
