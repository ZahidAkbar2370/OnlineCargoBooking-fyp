<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CargoController extends Controller
{
    function store(Request $request) {
        $tracking_no = rand(1000,1000000);
        $createCargo = Cargo::create([
            "user_id" => Auth::user()->id ?? 1,
            "traking_no" => $tracking_no,
            "sender_name" => $request->sender_name,
            "sender_mobile_no" => $request->sender_mobile_no,
            "sender_email" => $request->sender_email,
            "sender_full_address" => $request->sender_full_address,
            "receiver_name" => $request->receiver_name,
            "receiver_mobile_no" => "1231231",
            "receiver_email" => $request->receiver_email,
            "receiver_full_address" => $request->receiver_full_address,
            "item_name" => $request->item_name,
            "item_description" => $request->item_description,
            "cost" => 0,
        ]);

        session()->flash("success", "Cargo Request Submitted! Admin Will Approve, Tracking NO:". $tracking_no);
        return redirect()->back();
    }

    function cargoHistory() {
        $cargos = Cargo::where("user_id", Auth::user()->id)->get();

        return view('front-end.profile.cargo_history', compact('cargos'));
    }

    function deleteCargo($id) {
        Cargo::find($id)->delete();

        session()->flash("success", "Cargo Deleted Successfully!");
        return redirect()->back();
    }
}
