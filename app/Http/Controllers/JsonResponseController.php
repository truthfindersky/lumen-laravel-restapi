<?php

//5. JSON Response

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class JsonResponseController extends Controller
{
    Public function SimpleArray(){
        
        $myArray=array("Volvo", "BMW", "Toyota");
        return response()->json($myArray);
    }

    Public function AssociativeArray(){
        $myArray=array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        return response()->json($myArray);
    }

    Public function MultidimensionalArray(){
        $myArray=array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
          );
        return response()->json($myArray);
    }
}
