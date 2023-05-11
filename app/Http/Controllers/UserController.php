<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    // show userlist
    public function Userlist()
    {
        $users = User::where("role", "user")->get();
        return view("Admin.userlist", compact("users"));
    }

    //show Add customer form
    public function AddCustomer()
    {
        return view("Admin.create_customer");
    }

    // add customer
    public function AddCustomerPost(Request $request)
    {
        $request->validate([
            "name" => "required",
            "last_name" => "required",
            "user_mob" => "required||numeric|digits:10",
            "email" => "required|email|unique:users",
            "user_add" => "required",
            "user_status" => "required",
            "password" => "required|min:6",
            "confirmpassword" => "required|min:6|same:password",
            "Dob" => "required",
            "image" => "required",
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

        $user = new User();
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->phone = $request->user_mob;
        $user->email = $request->email;
        $user->status = $status;
        $user->address = $request->user_add;
        $user->password = Hash::make($request->password);
        $user->dob = $request->Dob;
        $user->image = $imageName;
        $user->role = "user";

        // dd($user);

        $user->save();

        return redirect("userlist")->with(
            "success",
            "customer added successfully"
        );
    }

    // show customer data
    public function showUser($id)
    {
        $users = User::find($id);
        return view("Admin.edit_customer", compact("users"));
    }

    // update  customer data
    public function UpdateCustomer(Request $request, $id)
    {
        $request->validate([
            "name" => "required",
            "last_name" => "required",
            "user_mob" => "required||numeric|digits:10",
            "email" => "required|email",
            "user_add" => "required",
            "user_status" => "required",
            "Dob" => "required",
        ]);

        $userfind = User::find($id);

        if (empty($userfind)) {
            return back()->with("failed", "Data not found");
        } else {
            if ($request->user_status == 1) {
                $status = "Active";
            } else {
                $status = "Inactive";
            }

            if ($request->hasFile("image")) {
                $image = $request->file("image");
                $imageName = time() . "." . $image->extension();
                $image->move(public_path("images"), $imageName);
            } else {
                $imageName = $userfind->image;
            }

            if($request->password == ""){
            	$password = $userfind->password;
            }else{
            	$password = Hash::make($request->password);
            }

            $userfind->name = $request->name;
            $userfind->last_name = $request->last_name;
            $userfind->phone = $request->user_mob;
            $userfind->email = $request->email;
            $userfind->status = $status;
            $userfind->address = $request->user_add;
            $userfind->dob = $request->Dob;
            $userfind->image = $imageName;
            $userfind->role = "user";

            $userfind->save();

            return redirect("userlist")->with(
                "success",
                "User information updated successfully"
            );
        }
    }


    public function deleteCustomer($id){
     
     $deleteUser = User::find($id);

     if(empty($deleteUser)){
     	return back()->with("failed", "Data not found");
     }else{
     	$deleteUser->delete();
     	return redirect("userlist")->with(
                "success",
                "delete successfully!!");
     }

    }
}
