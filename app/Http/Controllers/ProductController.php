<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    function index()
    {
    	$data=Product::all();
    	return view('product')->with('product',$data);
    }
    function detail($id)
    {
    	$data=Product::find($id);
    	return view('detail')->with('product',$data);	
    }
    function search(Request $req)
    {
    	$data=Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search')->with('product',$data);
    }
    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) 
        {
           $cart=new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/product');            
        }
        else
        {
            return redirect('/product');
        }
    }

    static function cartItem()
    {
        // $user_id=session::get('user')['id'];
        // return Cart::where('user_id',$user_id)->count();
    }

}
