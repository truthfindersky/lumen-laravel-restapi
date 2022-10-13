<?php

//7. Send and Catch

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    function Catch(Request $request){
    return $request;
    }

    function CatchViaHeader(Request $request){
        //return $request->header();
        return $request->header("name");
    }
}
