<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

//11. Laravel Query Builder

class BuilderController extends Controller
{    
    function AllRows(){
        $result=DB::table('students')->get();
        return $result;
    }

    function SingleRow(){
        $result=DB::table('students')->where('name', 'Moana')->get();
        return $result;
    }

    function SingleRowFirst(){
        $result=DB::table('students')->where('name', 'Moana')->first();
        return $result->class;
    }

    function Find(){
        $result=DB::table('students')->find(7);
        return $result->name;
     }
    
    function Column(){
        $result=DB::table('students')->pluck('name');
        return $result;
     }
    
    function MultiColumn(){
        $result=DB::table('students')->pluck('roll','name');
        return $result;
     }
    
     function CountRow(){
        $result=DB::table('students')->count();
        return $result;
     }

    function MaxFromRow(){
        $result=DB::table('students')->max('roll');
        return $result;
    }

    function MinFromRow(){
        $result=DB::table('students')->min('class');
        return $result;
    }

    function AvgFromRow(){
        $result=DB::table('students')->avg('roll');
        return $result;
    }

    function SummationFromRow(){
        $result=DB::table('students')->sum('roll');
        return $result;
    }

    function Insert(Request $request){
        $name=$request->input("name");
        $roll=$request->input("roll");
        $city=$request->input("city");
        $phone=$request->input("phone");
        $class=$request->input("class");
        $result=DB::table('students')->insert(['name' => $name, 'roll' => $roll, 'city'=> $city,'phone'=> $phone,'class'=> $class]); 
        if($result==true){
        return "Insert Success";
        }else{
        return "Insert Failed";
        }
    }
 
    function Update(Request $request){
        $id=$request->input("id");
        $name=$request->input("name");
        $roll=$request->input("roll");
        $city=$request->input("city");
        $phone=$request->input("phone");
        $class=$request->input("class");
        $result=DB::table('students')->where('id', $id)->update(['name' => $name,'roll' => $roll,'city' => $city,'phone' => $phone,'class' => $class]);
        if($result==true){
        return "Update Success";
        }else{
        return "Update Failed";
       }
    }
 
    function Delete(Request $request){
        $id=$request->input("id");
        $result=DB::table('students')->where('id', $id)->delete();
        if($result==true){
        return "Delete Success";
        }else{
        return "Delete Failed";
        }
    }
}

