<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LumenModel;

//12. Model and Controller

class LumenController extends Controller
{
    function SelectAll(){
        $result=LumenModel::all();
        return $result;
    }

    function SelectByID(Request $request){
        $id=$request->input('id');
        $result=LumenModel::where('id', $id)->get();
        return $result;
    }

    function Count(){
        $result=LumenModel::count();
        return $result;
    }

    function Min(){
        $result=LumenModel::min('roll');
        return $result;
    }

    function Max(){
        $result=LumenModel::max('roll');
        return $result;
    }

    function Avg(){
        $result=LumenModel::avg('roll');
        return $result;
    }

    function Sum(){
        $result=LumenModel::sum('roll');
        return $result;
    }

    function Insert(Request $request){
        
        $name=$request->input('name');
        $roll=$request->input('roll');
        $city=$request->input('city');
        $phone=$request->input('phone');
        $class=$request->input('class');
        
        $result=LumenModel::insert(['name' => $name, 'roll' => $roll, 'city' => $city,'phone' => $phone, 'class' => $class]);
        
        if($result==true){
            return "Insert Success";
        }else{
            return "Insert Failed";
        }
    }

    function Delete(Request $request){
        
        $id=$request->input('id');
        
        $result=LumenModel::where('id', $id)->delete();
        
        if($result==true){
            return "Delete Success";
        }else{
            return "Delete Failed";
        }
    }

    function Update(Request $request){
        
        $id=$request->input('id');
        $name=$request->input('name');
        $roll=$request->input('roll');
        $city=$request->input('city');
        $phone=$request->input('phone');
        $class=$request->input('class');
        
        $result=LumenModel::where('id', $id)->update(['name' => $name, 'roll' => $roll, 'city' => $city, 'phone' => $phone, 'class' => $class]);
        
        if($result==true){
            return "Update Success";
        }else{
            return "Update Failed";
        }
    }
}
