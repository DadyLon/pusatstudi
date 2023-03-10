<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//Namespace Auth
use App\Http\Controllers\Auth\LoginController;

//Namespace Admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;

//Namespace User
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
    return view('index');
});
Route::view('meta-data','meta-data');

Route::group(['namespace' => 'Admin','middleware' => 'auth','prefix' => 'admin'],function(){

	Route::get('/',[AdminController::class,'index'])->name('admin')->middleware(['can:admin']);

	//Route Rescource
	Route::resource('/user','UserController')->middleware(['can:admin']);
    Route::resource('/admin/post', 'PostController')->middleware(['can:admin']);


});

Route::group(['namespace' => 'User','middleware' => 'auth' ,'prefix' => 'user'],function(){
	Route::get('/',[UserController::class,'index'])->name('user');
	Route::get('/profile',[ProfileController::class,'index'])->name('profile');
    Route::get('/usermetadata',[PostController::class,'usermetadata'])->name('usermetadata');
	Route::patch('/profile/update/{user}',[ProfileController::class,'update'])->name('profile.update');
});

Route::group(['namespace' => 'Auth','middleware' => 'guest'],function(){
	Route::view('/login','auth.login')->name('login');
	Route::post('/login',[LoginController::class,'authenticate'])->name('login.post');
});

// Other
Route::view('/register','auth.register')->name('register');
Route::view('/forgot-password','auth.forgot-password')->name('forgot-password');
Route::post('/logout',function(){
	return redirect()->to('/login')->with(Auth::logout());
})->name('logout');
