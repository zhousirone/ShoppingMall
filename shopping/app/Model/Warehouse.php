<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table = 'warehouse';
    public function add($arr)
    {
        $this->name = $arr['name'];
        $this->code = $arr['code'];
        $this->state = $arr['state'];
        $this->location = $arr['location'];
        $this->service = $arr['service'];
        return $this->save();
    }
    public function upd($data,$id)
    {
        if ($this->find($id))
        {
            return $this->where('id',$id)->update($data);
        }else{
            return false;
        }

    }
}
