<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use App\Mail\ResetEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;


class ResetController extends Controller
{
    public function show(){
        return view("auth.reset");
    }

    public function resetLink(Request $request){
            $user=User::where("email",$request->email)->first();
            if(!is_null($user)){
                $user->password_reset = route("reset")."/".Str::random(32);
                $user->save();
                Mail::to("raj350@mail.fresnostate.edu")->send(new ResetEmail($user->password_reset));
            }   

            return redirect()->route("login");
    }
    public function passReset($id){
        $user = User::where("password_reset",route("reset")."/".$id)->first();
        if(!is_null($user)){
            return view("auth.password")->with(["id"=>$id]);
        } else {
            abort(404);
        }
    }
    public function changePass(Request $request){
        $user = User::where("password_reset",route("reset")."/".$request->id)->first();
        $user->password = $request->password;
        $user->password_reset="";
        $user->save();
        return redirect()->route("login");
    }
}
