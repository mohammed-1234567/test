<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return Book::query()->get();

    }
    public function store(StoreBookRequest $request){
        Book::query()->create($request->validated());
    }
    public function show($id)
    {
        return Book::query()->find($id);
    }
    public function put($id,UpdateBookRequest $request){
        $Book =Book::findorFail($id);
        $Book->update($request->validated());


    }
    public function delete($id){
        $Book =Book::findorFail($id);
        $Book->delete();
    }


    }
