<?php

namespace App\Http\Controllers;
use App\Category;
use DB;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories =  DB::table('categories')->select('name','created_at')->get();
        return response()->json($categories);
    }

    public function showById($id){
        dd('test');
    }

    public function edit($id){
        dd('test');
    }

    public function showPosts($id){
        // dd($id);

        $posts = DB::table('posts')
            ->join('categories', 'categories.id', '=', 'posts.category_id')
            ->select('posts.name','posts.id','categories.id as catId', 'categories.name')
            ->where('categories.id','=',$id)
            ->get();
            // dd($posts);
            return response()->json([200,$posts]);
    }

    public function delete(){
        dd('test');
    }
}
