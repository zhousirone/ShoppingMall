<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Role_power
 *
 * @property int $id
 * @property int|null $role_id
 * @property int|null $power_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Role_power newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Role_power newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Role_power query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Role_power whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Role_power wherePowerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Role_power whereRoleId($value)
 * @mixin \Eloquent
 */
class Role_power extends Model
{
    public $timestamps=false;
    protected $table="role_power";
}
