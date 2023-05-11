<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;
use Hash;

class MerchantController extends Controller
{
     // show merchant list
    public function MerchantList(){
     $merchants = Merchant::get();
     return view('Admin.merchant_list',compact('merchants')); 
    }


    //show add merchant form
    public function addmerchant(){
     return view('Admin.add_merchant');
    }
	
	//add merchant
	public function AddMerchantPost(Request $request){
		
		
		$request->validate([
            "name" => "required",
            "last_name" => "required",
            "user_mob" => "required||numeric|digits:10",
            "email" => "required|email|unique:users",       
            "user_status" => "required",
            "password" => "required|min:6",
            "confirmpassword" => "required|min:6|same:password",
            "Dob" => "required",
            "image" => "required",
			"user_name" => "required",
			"city" => "required",
			"state" => "required",
			"post_code" => "required",
			"comapany_name" => "required",
			"mail_add" => "required",
        ]);
	        
         if ($request->user_status == 1) {
            $status = "Active";
        } else {
            $status = "Inactive";
        }

        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $imageName = time() . "." . $image->extension();
            $image->move(public_path("images"), $imageName);
        }
        
        $merchant = new Merchant();
        $merchant->name = $request->name;
        $merchant->last_name = $request->last_name;
        $merchant->phone = $request->user_mob;
        $merchant->email = $request->email;
  
        $merchant->status = $status;
        $merchant->mailing_address = $request->mail_add;
        $merchant->password = Hash::make($request->password);
        $merchant->dob = $request->Dob;
        $merchant->image = $imageName;
        $merchant->role = "merchant";
        

        $merchant->username = $request->user_name;
        $merchant->city = $request->city;
        $merchant->state = $request->state;
        $merchant->post_code = $request->post_code;
        $merchant->company_name = $request->comapany_name;

        
        $merchant->save();

        return redirect("merchantlist")->with(
            "success",
            "merchant added successfully"
        );
		
	}


		
	
}
