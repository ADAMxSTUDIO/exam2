<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        return DB::table('products')->get();
    }

    public function show($id){
        return DB::table('products')->where('id', $id)->get();
    }

    public function store(){
        DB::table('products')->insert([
            'name' => 'nom1',
            'description' => 'desc1',
            'price' => 301.22,
            'stock' => 3,
            'image' => 'image1'
        ]);
    }

    public function update($id){
        DB::table('products')->where('id', $id)->update([
            'name' => 'nom2',
            'description' => 'desc2',
            'price' => 451.52,
            'stock' => 1,
            'image' => 'image2'
        ]);
    }

    public function destroy($id){
        DB::table('products')->where('id', $id)->delete();
    }
}