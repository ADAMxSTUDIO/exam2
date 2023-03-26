<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function deletePost(){
        DB::table('posts')->where('deleted_at', '<>', null)->delete();
    }

    public function getUndeletedPost(){
        return dd(DB::table('posts')->where('deleted_at', null)->get());
    }

    public function getAllPosts(){
        return dd(Post::withTrashed()->get());
    }

    public function restoreDeletedPost($id){
        Post::find($id)->restore();
    }

    public function forceDeletePost($id){
        Post::find($id)->forceDelete();
    }
}