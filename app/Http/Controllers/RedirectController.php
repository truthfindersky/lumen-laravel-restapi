<?php

//6. Redirect And Download

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function First(){
        return redirect('/second');
    }

    public function Second(){
        return "Im Second";
    }

    public function Download()
    {
        $path='demo.txt';
        return response()->download($path);
    }
}
