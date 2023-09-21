<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Models\Cargo;
use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front-end.home');
});
route::post('home/contact_us',[ContactController::class, 'messages']);

route::get('user/profile',[UserController::class, 'profileView']);
route::get('user/edit-profile',[UserController::class, 'editProfile']);
route::post('user/update-profile',[UserController::class, 'updateProfile']);

Route::get('trackid',[App\Http\Controllers\TrackIDController::class, 'create']);
Route::post('trackid',[App\Http\Controllers\TrackIDController::class, 'track']);

// Route::post('track-id', function(Request $request) {
    //     $track = Cargo::where("traking_no" , $request->track_id)->first();
    // });
    
    route::get('request-cargo',function (){
        return view('front-end.request_cargo');
    });
    Route::post('user/request-cargo',[App\Http\Controllers\CargoController::class, 'store']);
    Route::get('user/cargo-history',[App\Http\Controllers\CargoController::class, 'cargoHistory']);
    Route::get('user/delete-cargo/{id}',[App\Http\Controllers\CargoController::class, 'deleteCargo']);
route::get('home/sign_in',[UserController::class, 'view']);
route::post('home/sign_in',[UserController::class, 'store']);

route::get('home/login',[UserController::class, 'viewLogin']);
route::post('home/login',[UserController::class, 'login']);

route::get('logout',[UserController::class, 'logout']);
// route::get('home/login',function (){ return view('front-end.login.login');
// });



//////////////////////////////////// Admin  pannel


Route::get('/admin', function () {
    return view('Admin.index');
});

//////////////////// DATA ///////////////////////

Route::get('/data-insert', function () {

    return view('Admin.data-insert');
});

// Route::get('/admin/view-users', function () {

//     $users = User::all();

//     return view('Admin.User.view_users', compact('users'));
// });

Route::get('/admin/view-users', [App\Http\Controllers\Admin\UserController::class,'index']);
Route::get('/admin/delete-user/{id}', [App\Http\Controllers\Admin\UserController::class,'delete']);

Route::get('/admin/cargo-history', [App\Http\Controllers\Admin\CargoController::class,'cargoHistory']);
Route::get('/admin/delete-cargo/{id}', [App\Http\Controllers\Admin\CargoController::class,'delete']);
Route::get('/admin/request-cargo/', [App\Http\Controllers\Admin\CargoController::class,'requestCargo']);


Route::get('/view-data', [AdminController::class,'viewData']);
// Route::get('/view-data', function () {

//     return view('Admin.view-data');
// });


/////////////////////////////TABLE ///////////////////

Route::get('/view-table', function () {

    return view('Admin.view-table');
});


/////////////////////// contact us ////////////////

Route::get('/contact-us', function () {

    return view('Admin.contact-us');
});

/////////////////////////////// register ////////////////////

Route::get('/register', function () {

    return view('Admin.register');
});

////////////////////////// log in /////////////
Route::get('/login', function () {

    return view('Admin.login');
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
