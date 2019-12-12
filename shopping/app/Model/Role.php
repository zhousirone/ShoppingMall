<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
/**
 * App\Model\Role
 *
 * @property int $id
 * @property string|null $rolename
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Power[] $powers
 * @property-read int|null $powers_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Role whereRolename($value)
 * @mixin \Eloquent
 */
=======
>>>>>>> dong
class Role extends Model
{
    public $timestamps=false;
    public function powers()
    {
        return $this->belongsToMany(Power::class, 'role_power', 'role_id', 'power_id');
    }
}
