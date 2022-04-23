<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function show(){
        return view('micosoft-p');
    }

    public function comment(){
        $comments = DB::table('comments')->orderBy('id','desc')->get();

        //$comment = Commment :: orderBy('id','desc')->get();
        return view('comment.comment',compact('comments'));
    }
    public function login(){
        return view('Bootstrap login');
    }
    public function save_comment(Request $request){

    DB::table('comments')->insert([
            'title' => $request->title, 
            'author' => $request->author,
            'context' => $request->content,
            'email' => '',
        
        ]);
        return redirect('/comment');
    }
    public function edit_comment($id)
    {
        $comment = DB::table('comments')->where('id',$id)->get();
        return vivew('comment.edit',compact('comment'));
    }
    public function delete_comment($id)
    {
        DB::talbe('comments')->where('id',$id)->delete();

        return redirect('/comment');
    }
}

