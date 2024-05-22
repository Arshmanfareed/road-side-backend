<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MailController;
use Laravel\Socialite\Facades\Socialite;




/*
================================
        FRONTEND ROUTES
================================
*/


Route::get('/' ,[WebsiteController::class ,'index' ])->name('frontendhome');


/*
================================
        BACKEND ROUTES
================================
*/

Route::get('auth/linkedin/redirect', function () {
        return Socialite::driver('linkedin-openid')->redirect();
    });
    
Route::get('auth/linkedin/callback', function () {
$user = Socialite::driver('linkedin-openid')->user();
// echo $user->token;
// dd($user);
// exit;

$data = [
        'title' => 'Setting'
];

return view('dashboard-account', compact('data', 'user'));

// return redirect('/dashboard');
});


Route::get('/admin-dashboard' ,[AdminController::class ,'dashboard' ])->name('admindashboard');
Route::get('/admin-login' ,[AdminController::class ,'login' ])->name('adminlogin');
Route::get('/admin/vendors/list' ,[AdminController::class ,'vendors_list' ])->name('admin_vendors_list');
Route::get('/admin/chat/private-chat' ,[AdminController::class ,'private_chat' ])->name('admin_private_chat');

// Registration and login routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/test-email', [MailController::class, 'testEmail']);







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
