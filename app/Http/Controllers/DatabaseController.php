<?php

namespace App\Http\Controllers;
//useclass
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

//9. db connection check

class DatabaseController extends Controller
{
    function testConn(){
        $dbname=DB::Connection()->getDatabaseName();
        return $dbname;
    }

    function SelectAll(){
        $dbname=DB::Connection()->select("SELECT * FROM students");
        return $dbname;
    }
}
