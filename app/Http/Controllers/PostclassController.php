<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostclassController extends Controller
{
    public function post(Request $request)
    {
        $param = [
            'name' => $request->name,
        ];
        DB::table('post')->insert($param);
    }
}
