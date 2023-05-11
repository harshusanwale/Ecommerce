<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\User;
use App\Models\Cart;
use Hash;
use Illuminate\Support\Facades\Auth;
use Session;


class frontController extends Controller
{
   public function frontlayout(){
    $product =Product::get();
    $letestproduct = Product::limit(6)->latest()->get();
    return view('front-theme.index',compact('product','letestproduct'));
   }

   public function contact(){
      return view('front-theme.contact');
     }

   public function offer(){
   return view('front-theme.special_offer');
   }

   // public function normalPage(){
   //    return view('front-theme.noraml1');
   // }

   public function delivery(){
      return view('front-theme.delivery');
   }

     public function productdetail($id){
      $productlist = Product::where('id',$id)->with('ProductDetail')->first();
      $category_id = $productlist->category_id;
      $related_product = Product::where('category_id',$category_id)->get();
      return view('front-theme.product_details',compact('productlist','related_product'));
     }

     public function cart(){
      $carts = [];
      if(Auth::user()){
        $userid= Auth::user()->id;
        $carts = Cart::where('user_id',$userid)->get();

      }      
      return view('front-theme.cart', compact('carts'));
     }

     public function login_new(){
      return view('front-theme.login');
     }

     public function user_store(Request $request){
      $request->validate([
         
         "email" => "required|email|unique:users",
         
     ]);

     $user = new User();
     $user->name = $request->fname;
     $user->last_name = $request->lname;
     $user->email = $request->email;
     $user->role = "user";
     $user->password = Hash::make($request->password);
   //   dd( $user);
     $user->Save();

     return back()->with("success", "User register successfully");
     }

     public function loginCheck(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);
	
        $userdata = $request->only("email", "password");
				
        if (Auth::attempt($userdata)) {
            
            return redirect("/user/login");
        }
        return back()->with("failed", "You have entered invalid credentials");
    }

    public function logout_new()
    {
        Session:
        flush();
        Auth::logout();
        return Redirect("/user/login");
    }

}
