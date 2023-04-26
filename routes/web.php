<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\HomeController;



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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/profile-visitorsview', function () {
    return view('/member/profile/profile-visitorsview');
});
Route::get('/register', function () {
    return view('register/index');
});
Route::post('register_member',[MemberController::class,'Register_Member']);
Route::get('/confirmation', function () {
    return view('confirmation');
});
//Route::post('/login',[LoginController::class,'login'])->name('login');

Auth::routes();
 
//User Route
Route::middleware(['auth','user-role:user'])->group(function()
{
    Route::get("/home",[HomeController::class,'userHome'])->name('home');
    Route::get("/profile",[MemberController::class,'index']);
    Route::get("/profile",[MemberController::class,'view'])->name('profile');
    Route::get("/settings",[MemberController::class,'editProfile'])->name('settings');
    Route::post('update_profile',[MemberController::class,'save_updatedProfile']);
    Route::get('/batch-list', function () {
        return view('/member/batch-list/index');
    });
    Route::get('/announcements', function () {
        return view('/member/announcements/index');
    });
    Route::get('/announcements/announcement', function () {
        return view('/member/announcements/announcement');
    });
    Route::get('/announcements/events', function () {
        return view('/member/announcements/events');
    });
    Route::get('/contact-us', function () {
        return view('/member/contact-us/index');
    });
    Route::get('/alumni-services', function () {
        return view('/member/alumni-services/index');
    });
    Route::get('/settings', function () {
        return view('/member/settings/index');
    });

});
//Admin Route
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/dashboard",[HomeController::class,'adminDashboard'])->name('admin.dashboard');
});
//SuperAdmin Route
Route::middleware(['auth','user-role:superadmin'])->group(function()
{
    Route::get("/superadmin/dashboard",[HomeController::class,'superadminDashboard'])->name('superadmin.dashboard');
});



Route::get('/reset-password', function () {
    return view('/auth/passwords/reset');
});

Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

