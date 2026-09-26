<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //return DB::table('users')->get();
        return User::all();
    }
        public function store(Request $request)
    {
        //DB::table('users')->insert([
        return User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);

    }

        public function show($id)
        {
            /*DB::table('users')
            ->where('id',$id)
            ->first();*/
            return User::findorFail($id);
        }
        public function update($id,Request $request){
            $user =User::findorFail($id);
            $user->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password
            ]);

        }
        public function delete($id){
            $user = User::findorFail($id);
            $user->delete();
        }
}




