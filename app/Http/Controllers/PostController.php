<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function index(){

        $postTable =  DB::table('posts')->select('name', 'description','created_at')->get();
        return response()->json($postTable);
    }
    public function getPostByCategories($id){

        dd($id);
    }
    public function edit(){

    }
    public function show($id){
        $post =  DB::table('posts')->select('name', 'description','created_at')->where('id','=',$id)->first();
        return response()->json($post);
    }
    public function delete($id){
     dd($id);
    }
}
