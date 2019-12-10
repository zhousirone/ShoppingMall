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
}
