<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    function cargoHistory() {
        $cargos = Cargo::all();

        return view("Admin.Cargo.history", compact('cargos'));
    }

    function delete($id) {
        $cargos = Cargo::find($id)->delete();

        session()->flash('sucess', 'Cargo Deleted');
        return redirect()->back();
    }

    function requestCargo() {
        $cargos = Cargo::all();

        return view("Admin.Cargo.request_cargos", compact('cargos'));
    }
}
