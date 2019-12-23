<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Personal extends Controller
{
    //
    public function personalCenter()
    {
        return view('index.personalcenter.personalCenter');
    }
}
