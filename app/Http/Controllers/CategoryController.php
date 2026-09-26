<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        //return DB::table('categories')->get();
        return Category::all();

    }
    public function store(Request $request){
        //DB::table('categories')->insert([
            return Category::create([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
    }
    public function show($id)
        {
            /*return DB::table('categories')
            ->where('id',$id)
            ->first();*/
            return Category::findOrFail($id);
        }
        public function put($id,Request $request){
            /*return DB::table('categories')
            ->where('id',$id)
            ->update([*/
            $category = Category::findOrFail($id);
            $category->update([
                'name'=>$request->name,
                'description'=>$request->description
            ]);
        }
        public function delete($id){
            /*return DB::table('categories')
            ->where('id',$id)
            ->delete();*/
            $category = Category::findOrFail($id);
            $category->delete();
        }
}
