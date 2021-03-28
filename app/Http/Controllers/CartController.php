<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use App\Models\Cart;



class CartController extends Controller
{
    public function show(){
        $cart_id = \Cookie::get("cart_id");
        return view("cart");
    }
    public function updateCart(Request $request){

        if($request->hasCookie("cart_id")==false){
            $cart_id = Str::random(30);
            $response = new Response($request->item);
            $response->withCookie(cookie("cart_id", $cart_id,10));

            Cart::create([
                "brower_id"=> $cart_id,
                "item_name"=> $request->item
            ]);
            
            return $response;
        } else {
            $cart_id = \Cookie::get("cart_id");

            Cart::create([
                "brower_id"=> $cart_id,
                "item_name"=> $request->item
            ]);
            
            $items =  Cart::select(["brower_id","item_name"])->where("brower_id",$cart_id);
            return $items;
        }
        
        return $request->item;
    }
}
