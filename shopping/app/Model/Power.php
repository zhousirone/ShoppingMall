<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
/**
 * App\Model\Power
 *
 * @property int $id
 * @property string|null $powername
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Menu[] $menus
 * @property-read int|null $menus_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Power newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Power newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Power query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Power whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Power wherePowername($value)
 * @mixin \Eloquent
 */
=======
>>>>>>> dong
class Power extends Model
{
    public $timestamps=false;
    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'power_menu', 'power_id', 'menu_id');
    }
}
