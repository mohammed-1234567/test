<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {

        $name ="mohammed";
        $users = User::query()->get();
        return view('home',compact('name','users'));
    }
}

