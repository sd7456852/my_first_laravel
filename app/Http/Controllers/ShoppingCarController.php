<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoppingCarController extends Controller
{
    public function index(){


        $data1 = DB::table('intro1')->get();
        // dd($data1);
        return view('Bootstrap index', compact('data1'));
    }
}
