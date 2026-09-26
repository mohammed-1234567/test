<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return Product::query()->get();

    }
    public function store(Request $request){
        Product::create([
            'name'=>$request->name,
            'in_stock'=>$request->in_stock,
            'price'=>$request->price
        ]);
    }
    public function show($id)
    {
        return Product::query()->find($id);
    }


    }
