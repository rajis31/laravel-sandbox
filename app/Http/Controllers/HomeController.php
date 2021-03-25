<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
    public function add(Request $request){


        $result = $request->validate([
            'name'=>'required',
            'count'=>'required',
        ]);
        
        $item = Items::create([
            'name'=> $result["name"],
            'count'=> $result["count"],
        ]);

        $item ->save();
        return view("Result")->with("result", items::all());
    }
    public function message(){
        return view("Emailer");
    }
    
    public function email(Request $request){
        Mail::to("raj350@mail.fresnostate.edu")->send(new TestEmail($request));
        return view("Success");
    }
}

