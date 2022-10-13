<?php

//4. API Response - Simple String Response through header and body

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
  public function MyBody($name){
    return response($name);
  }

  public function MyHeader($name){
    return response($name)
    ->header('name', $name);
  }

  //name goes though body and header, other will go though header
  public function ManyHeaderResponse($name){
    return response($name)
    ->header('name', $name)
    ->header('age', '2')
    ->header('city', 'Dhaka')
    ->header('username', 'moana');
  }
}
