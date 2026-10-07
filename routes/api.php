<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/
Route::get('users',[UserController::class, 'index']);
Route::post('users',[UserController::class, 'store']);
Route::get('users/{id}',[UserController::class,'show']);
Route::put('users/{id}',[UserController::class,'put']);
Route::delete('users/{id}',[UserController::class,'delete']);

Route::get('categories',[CategoryController::class,'index']);
Route::get('categories/{id}',[CategoryController::class,'show']);
Route::post('categories',[CategoryController::class,'store']);
Route::put('categories/{id}',[CategoryController::class,'put']);
Route::delete('categories/{id}',[CategoryController::class,'delete']);

Route::post('products',[ProductController::class,'store']);
Route::get('products',[ProductController::class,'index']);
Route::get('products/{id}',[ProductController::class,'show']);
Route::put('products/{id}',[ProductController::class,'put']);
Route::delete('products/{id}',[ProductController::class,'delete']);

Route::get('/projects', function () {
    return DB::table('projects')->get();
});
Route::get('/projects/{id}', function ($id) {
    return DB::table('projects')->find($id);
});
Route::post('/projects', function (Request $request) {
    DB::table('projects')->insert([
        'name'        => $request->name,
        'description' => $request->description,
        'start_date'  => $request->start_date,
        'end_date'    => $request->end_date,
        'status'      => $request->status ?? 'pending',
        'created_at'  => now(),
        'updated_at'  => now(),
    ]);

});
Route::put('/projects/{id}', function (Request $request, $id) {
    DB::table('projects')->where('id', $id)->update([
        'name'        => $request->name,
        'description' => $request->description,
        'start_date'  => $request->start_date,
        'end_date'    => $request->end_date,
        'status'      => $request->status,
        'updated_at'  => now(),
    ]);
});
Route::delete('/projects/{id}', function ($id) {
    DB::table('projects')->where('id', $id)->delete();
});


Route::get('/tasks', function () {
    return DB::table('tasks')->get();
});
Route::get('/projects/{project_id}/tasks', function ($project_id) {
    return DB::table('tasks')->where('project_id', $project_id)->get();
});
Route::get('/tasks/{id}', function ($id) {
    return DB::table('tasks')->find($id);
});
Route::post('/tasks', function (Request $request) {
    DB::table('tasks')->insert([
        'project_id' => $request->project_id,
        'title'      => $request->title,
        'details'    => $request->details,
        'status'     => $request->status ?? 'To do',
        'priority'   => $request->priority ?? 'medium',
        'due_date'   => $request->due_date,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
});
Route::put('/tasks/{id}', function (Request $request, $id) {
    DB::table('tasks')->where('id', $id)->update([
        'project_id' => $request->project_id,
        'title'      => $request->title,
        'details'    => $request->details,
        'status'     => $request->status,
        'priority'   => $request->priority,
        'due_date'   => $request->due_date,
        'updated_at' => now(),
    ]);
});
Route::delete('/tasks/{id}', function ($id) {
    DB::table('tasks')->where('id', $id)->delete();
});


Route::get('/comments', function () {
    return DB::table('comments')->get();
});
Route::get('/tasks/{task_id}/comments', function ($task_id) {
    return DB::table('comments')->where('task_id', $task_id)->get();
});
Route::get('/comments/{id}', function ($id) {
    return DB::table('comments')->find($id);
});
Route::post('/comments', function (Request $request) {
    DB::table('comments')->insert([
        'task_id'      => $request->task_id,
        'comment_text' => $request->comment_text,
        'author'       => $request->author,
        'created_at'   => now(),
        'updated_at'   => now(),
    ]);
});
Route::put('/comments/{id}', function (Request $request, $id) {
    DB::table('comments')->where('id', $id)->update([
        'task_id'      => $request->task_id,
        'comment_text' => $request->comment_text,
        'author'       => $request->author,
        'updated_at'   => now(),
    ]);
});
Route::delete('/comments/{id}', function ($id) {
    DB::table('comments')->where('id', $id)->delete();
});


Route::post('books',[BookController::class,'store']);
Route::get('books',[BookController::class,'index']);
Route::get('books/{id}',[BookController::class,'show']);
Route::put('books/{id}',[BookController::class,'put']);
Route::delete('books/{id}',[BookController::class,'delete']);

Route::post('halls',[HallController::class,'store']);
Route::get('halls',[HallController::class,'index']);
Route::get('halls/{id}',[HallController::class,'show']);
Route::put('halls/{id}',[HallController::class,'put']);
Route::delete('halls/{id}',[HallController::class,'delete']);
