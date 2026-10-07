<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHallRequest;
use App\Http\Requests\UpdateHallRequest;
use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function store(StoreHallRequest $request){
        $hall = Hall::query()->create($request->validated());
        return $this-> success(data: $hall, status: 201);
    }
    public function index(){
        return Hall::query()->get();
    }
    public function show($id){
        $hall = Hall::query()->find($id);
        return $this-> success(data: $hall);
    }
    public function put($id,UpdateHallRequest $request){
        $hall = Hall::query()->findOrFail($id);
        $hall->update($request->validated());
        return $this-> success(data: $hall, status: 200);
    }
    public function delete($id){
        $hall = Hall::query()->findOrFail($id);
        $hall->delete();
        return $this-> success( status: 200);
    }
}

