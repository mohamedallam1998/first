<?php

namespace App\Http\Controllers;
use App\Models\Offer ;
use Illuminate\Http\Request;

class Crudcontroller extends Controller
{
    public function getoffers(){
       return Offer::get();
    }
    public function create(){
        return view('offers.create');
    }

    public function store(Request $request){
       Offer::create([
        'First_Name' => $request->FirstName ,
        'Last_Name' => $request->LastName ,
        'Age' => $request->Age ,
       ]);

    }

}
