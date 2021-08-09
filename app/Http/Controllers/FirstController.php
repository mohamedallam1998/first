<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FirstController extends Controller
{

    public function showstring1(){
          return "Wlelcome ShowString1";
    }
    public function showstring2(){
        return "Wlelcome ShowString2";
    }
    public function showstring3(){
        return "Wlelcome ShowString3";
    }
    public function showstring4(){
        return "Wlelcome ShowString4";
    }

    public function getindex(){
        // $data['First_Name'] = "Mohammed";
        // $data['Last_Name']  = "Allam";
        // $data['Age']  = 23 ;
        $obj = new \stdClass();
        $obj -> First_Name = "Mohammed";
        $obj -> Last_Name = "Allam";
        $obj -> Age = 23 ;

        return view('welcome' , compact('obj') );
    }
    //
}



























