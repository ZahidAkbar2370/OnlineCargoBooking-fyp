<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function view()
    {
        return view('front-end.login.Register');
    }
    public function profileView()

    {
        $userid = session('userid');
        // $user =User::where('id',$userid)->get();
        $user = User::where("id", $userid)->first();
        // print_r($user);
        // die();
        //  $user = User::where("id",session('user')->id)
        return view('front-end.profile.profile', compact('user'));
    }
    public function editProfile()
    {
        return view('front-end.profile.edit_profile');
    }
    public function updateProfile(Request $request)
    {

        $user_id =  Auth::user()->id;
        $user = User::find($user_id);

        $user->name = $request->name;
        $user->mobile_no = $request->mobile_no;
        $user->country = $request->country;
        $user->address = $request->city;

        // Auth::user()->name = $request->name;
        // Auth::user()->mobile_no = $request->mobile_no;
        // Auth::user()->country = $request->country;
        // Auth::user()->address = $request->city;

        $user->update();

        session()->flash('success', "Profile Updated!");
        return redirect("user/profile");
        // print_r($user);
        // die();
        //  $user = User::where("id",session('user')->id)
        // return view('front-end.profile.edit_profile',compact('user'));
    }

    //
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'password' => 'required',
        ]);

        $NewUser = new User;

        $NewUser->name =  $request->name;
        $NewUser->email = $request->email;
        $NewUser->mobile_no = $request->number;
        $NewUser->password = $request->password;
        $NewUser->save();
        session()->flash('success', "You re Succesfully Registered!");

        return redirect('home/login');
    }
    public function viewLogin()
    {
        return view('front-end.login.login');
    }
    public function login(Request $request)
    {
        $user = User::where("email", $request->email)->first();
        // dd($user);
        // exit();

        if (!empty($user)) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                // session()->put('user', $user);
                if(Auth::user()->role == "customer"){
                    return redirect("/");
                }
        
                if(Auth::user()->role == "admin"){
                    return redirect("admin");
                }

                return redirect('/');
            }
        }

        // else {
        session()->flash('invalid', 'Incorrect UserName And Password');
        return redirect()->back();
        // }
    }
    public function logout()
    {
        // session()->forget('user');
        Auth::logout();
        // session()->forget('userid');
        return redirect('/');
    }
}
