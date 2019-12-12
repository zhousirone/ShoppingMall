<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
/**
 * App\Model\Power_menu
 *
 * @property int $id
 * @property int|null $power_id
 * @property int|null $menu_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Power_menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Power_menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Power_menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Power_menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Power_menu whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Power_menu wherePowerId($value)
 * @mixin \Eloquent
 */
=======
>>>>>>> dong
class Power_menu extends Model
{
    public $timestamps=false;
    protected $table="power_menu";
}
