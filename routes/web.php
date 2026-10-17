<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Home;
use App\Models\User;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('users', function () {
    $users = User::query()->get();
    return view('index', compact('users'));
})->name('users.index');
Route::get('users/create', function () {
    return view('create');
})->name('users.create');

Route::post('users',function(Request $request){
    User::query()->create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
    ]);
    $users = User::query()->get();
    return redirect()->route('users.index');


})->name("users.store");

Route::get('/home', [HomeController::class, 'home']);

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
