<?php

//3. Laravel Lumen API Controller
//use these classes
namespace App\Http\Controllers;
use App\User;

class MyController extends Controller
{
  public function My(){
    return "My name is Mamun";
  }
  public function MyNameAge($name,$age){
    return "My name is ".$name." and age is ".$age;
  }

}

