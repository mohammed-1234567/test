<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //return DB::table('users')->get();
        $user = User::with('orders')->get();
        return $this-> success(data: $user, status: 200);


    }
        public function store(Request $request)
    {

        $user = User::query()->create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,

    ]);

        $user->orders()->create([
            'price' => $request->price
        ]);
        return $this-> success(data: $user, status: 200);

    }

        public function show($id)
        {
            /*DB::table('users')
            ->where('id',$id)
            ->first();*/
            return User::query()->find($id);
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




