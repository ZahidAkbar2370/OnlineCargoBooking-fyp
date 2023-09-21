<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index() {
            $users = User::all();

    return view('Admin.User.view_users', compact('users'));
    }

    function delete($id){
        User::find($id)->delete();

        session()->flash('sucess', 'User Deleted');
        return redirect()->back();
    }
}
