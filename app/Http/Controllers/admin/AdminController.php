<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact_messages;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function viewData(){
     $contacts = Contact_messages::all();
    //  dd($contacts);
        return view('Admin.view-data',compact('contacts'));
    }
}
