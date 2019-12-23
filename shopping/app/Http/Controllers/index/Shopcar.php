<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Shopcar extends Controller
{
    public function shopCar(){

        return view('index.common.shopCar');
    }
    public function check()
    {
        return view('index.common.check');
    }
    public function zhifu()
    {
        return view('index.common.zhifu');
    }
}
