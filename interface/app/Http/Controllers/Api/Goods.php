<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Goods as Good;

class Goods extends Controller
{

    public function list(Request $request)
    {
        $data = Good::all();
        return $data;
    }
}
