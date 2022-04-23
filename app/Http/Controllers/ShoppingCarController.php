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

    public function page1(){
        return view('Bootstrap shopping car page1');
    }
    public function page2(){
        return view('Bootstrap shopping car page2');
    }
    public function page3(){
        return view('Bootstrap shopping car page3');
    }
    public function page4(){
        return view('Bootstrap shopping car page4');
    }

}
