<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\RequisitionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TechnicianController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AfterSaleController;
use App\Http\Controllers\CaptchaServiceController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('after-sale');
});

Route::get('/after-sale', [AfterSaleController::class,'index'])->name('after-sale');

Route::get('/clear-cache', function() {

    Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('view:clear');

    dd("Cache Clear All","Routes cache cleared",'Config cache cleared','View cache cleared');
});

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);


/**
 * Admin
 */

Route::get('/admin', function (){
    app()->setLocale('fa');
    session()->put('locale', 'fa');

    if(auth()->user() and auth()->user()->is_admin == 1){
        return redirect('/admin/dashboard');
    }else{
        return redirect('/admin/login');
    }
});

Route::middleware('guest')->group(function () {
    app()->setLocale('fa');
    session()->put('locale', 'fa');

    Route::get('/admin/login', [LoginController::class,'index'])->name('login');
    Route::post('/admin/login', [LoginController::class,'store']);
});


Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function (){
    app()->setLocale('fa');
    session()->put('locale', 'fa');

    Route::delete('/logout', [LoginController::class,'destroy']);
    Route::get('/logout', function (){
        return redirect('/admin');
    });

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('requisitions', RequisitionController::class);
    Route::resource('requisitions.technicians', TechnicianController::class);
    Route::resource('requisitions.messages', MessageController::class);

    Route::get('change-password', [ChangePasswordController::class,'index']);
    Route::post('change-password', [ChangePasswordController::class , 'store'])->name('change.password');

});



