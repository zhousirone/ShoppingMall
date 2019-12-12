<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
/**
 * App\Model\Admin_role
 *
 * @property int $id
 * @property int|null $admin_id
 * @property int|null $role_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin_role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin_role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin_role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin_role whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin_role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Admin_role whereRoleId($value)
 * @mixin \Eloquent
 */
=======
>>>>>>> dong
class Admin_role extends Model
{
   public $timestamps=false;
   protected $table="admin_role";

}
