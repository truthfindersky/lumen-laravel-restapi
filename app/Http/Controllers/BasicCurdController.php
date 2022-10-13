<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BasicCurdController extends Controller
{
    //GET
    function Select(Request $request){
        
        $SQL="SELECT * FROM students";
        $request=DB::select($SQL);
        return $request;
    }

    //POST
    function Create(Request $request){
        
        $name=$request->input("name");
        $roll=$request->input("roll");
        $city=$request->input("city");
        $phone=$request->input("phone");
        $class=$request->input("class");
        
        $SQL="INSERT INTO `students`(`name`, `roll`, `city`, `phone`, `class`) VALUES (?,?,?,?,?)";
        
        $result=DB::insert($SQL, [$name,$roll,$city,$phone,$class]);
            if($result==true){
            return "Data insert Success";
            }else{
            return "Data insert Failed";
            }
    }

    //DELETE, use params
    function Delete(Request $request){
        $id=$request->input("id");
        $SQL= "DELETE FROM `students` WHERE `id`=?";
        $result=DB::delete($SQL,[$id]);
            if($result==true){
            return "Delete Success";
            }else{
            return "Delete Failed";
        }
    }
    
    //PUT, use body raw json
    function Update(Request $request){ 
        $name=$request->input("name");    
        $roll=$request->input("roll");
        $city=$request->input("city");
        $phone=$request->input("phone");
        $class=$request->input("class");
        $SQL= "UPDATE `students` SET `name`=?,`city`=?,`phone`=?,`class`=? WHERE `roll`=?";
        $result=DB::update($SQL,[$name,$city,$phone,$class,$roll]);
        if($result==true){
            return "Update Success";
            }else{
            return "Update Failed";
        }
    }
}