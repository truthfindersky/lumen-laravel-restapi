<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LumenModel;

class AuthenticateController extends Controller
{
    function Select(){
        $result=LumenModel::all();
        return $result;
    }

    function SelectByID(Request $request){
        $id=$request->input('id');
        $result=LumenModel::where('id', $id)->get();
        return $result;
    }
}
