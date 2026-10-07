<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function success($message = "success" , $data =[],$status = 200){
        return response()->json([
            'message'=> $message,
            'data'=> $data,
            'status'=> true
        ],$status);
    }

}
