<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
    public function add(Request $request){


        $result = $request->validate([
            'name'=>'required',
            'count'=>'required',
        ])->only(["name","count"]);
        
        $item = Items::create([
            'name'=> $request->get("name"),
            'count'=> $request->get("count"),
        ]);
        $item ->save();
        return view("Result")->with("result", Items::all());
    }
}

