<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
//use App\Model\Role;
/**
 * App\Model\Admin
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $password
 * @property string|null $nickname
 * @property string|null $createtime
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereCreatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin whereUsername($value)
 * @mixin \Eloquent
 */
class Admin extends Model
{
    public $timestamps=false;
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'admin_role', 'admin_id', 'role_id');
    }

}
