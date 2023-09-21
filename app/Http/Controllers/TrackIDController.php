<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class TrackIDController extends Controller
{
    function create()  {
        return view("front-end.track_id");
    }

    function track(Request $request) {
        $checkCargo = Cargo::where("traking_no", $request->track_id)->first();

        $found = 0;
        if(!empty($checkCargo)){
            $found = 1;
        }

        return view("front-end.track_id", ["cargoData" => $checkCargo, "found" => $found]);
    }
}
