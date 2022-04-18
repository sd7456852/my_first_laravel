<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCarController extends Controller
{
    public function index(){


        $data1 = DB::table('news'); //前三行
        $data2 = DB::table('news');//後三行
        $data3 = DB::table('news');//隨機三行

        dd($data1,$data2,$data3);

        return view('Bootstrap index');
    }
}
