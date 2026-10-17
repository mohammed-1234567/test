<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::query()->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }
    public function store(StoreProductRequest  $request){
        Product::query()->create($request->validated());
        $products = Product::query()->get();
        return redirect()->route('products.index');
        //return $this-> success(data: $product, status: 201);

    }
    public function show($id)
    {
        $product = Product::query()->find($id);
        return $this-> success(data: $product, status: 201  );
    }
    public function put($id,UpdateProductRequest $request){
        $product =Product::findorFail($id);
        $product->update($request->validated());
        return $this-> success(data: $product, status: 200);

    }
    public function delete($id){
        $product =Product ::findorFail($id);
        $product->delete();
        return $this-> success( status: 200);
    }
    }
