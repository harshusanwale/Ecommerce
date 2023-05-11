<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    //show login form
    public function index()
    {
        return view("Admin.login");
    }

    // show register form
    public function Showregister()
    {
        return view("Admin.register");
    }

    //create user
    public function register(Request $request)
    {
        $request->validate([
            "username" => "required",
            "email" => "required|email|unique:users",
            "password" => "required",
            "confirmed_password" => "required|same:password",
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = "admin";
        $user->password = Hash::make($request->password);

        $user->Save();

        return back()->with("success", "User register successfully");
    }

    // create login
    public function login(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);
	
        $userdata = $request->only("email", "password");
				
        if (Auth::attempt($userdata)) {
            $user = Auth::user();
            Session::put("name", $user->username);
            return redirect("dashboard");
        }
        return back()->with("failed", "You have entered invalid credentials");
    }

    // view dashboard
    public function dashboard()
    {
		//dd(Session::get('name'));
        
        if(Auth::check()) {
            return view("Admin.dashboard");
        }
        return redirect("login")->with(
            "failed",
          "You are not allowed to access"
        );
    }

    // logout
    public function logout()
    {
        Session:
        flush();
        Auth::logout();
        return Redirect("login");
    }

    //show change password
    public function ChangePassword()
    {
        return view("Admin.manage_account");
    }

    //Change pasword 
    public function ResetPassword(Request $request){
        $request->validate([
            "old_password" => "required|min:6",
            "new_password" => "required|min:6",
            "Cpassword"    => "required|min:6|same:new_password",
        ]);

        $auth = Auth::user();
        // dd(Hash::check($request->old_password,$auth->password));
        if(!Hash::check($request->old_password,$auth->password)){
            return back()->with('failed','Current Password is Invalid');
        }

        if(strcmp($request->old_password, $request->new_password) == 0){
            return back()->with('failed','New Password cannot be same as your current password.');
        }

        $user = User::find($auth->id);
        $user->password = hash::make($request->new_password);

        $user->save();

        return back()->with('success','Password Changed Successfully');

    }
}
