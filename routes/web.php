<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\BranchController;

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

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', function () {    
    if (auth()->guest()) {
        return view('auth.login');
    }else {
        return view('admin.dashboard');
    }
})->name('login');

Auth::routes();


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/login', [LoginController::class, 'login'])->name('login');

    // Route::get('/permission', [PermissionController::class, 'index'])->name('permission');
      

    




Route::get('/logout',  [App\Http\Controllers\LogoutController::class, 'logout'])->name('custom.logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth:web']], function ()
{   
    
    Route::resource('/roles', RolesController::class);

    Route::resource('/permission', PermissionController::class);
    Route::get('/permission', [PermissionController::class, 'index'])->name('permission.index');
    Route::post('/permission/bulk', [PermissionController::class, 'bulkPermission'])->name('bulkPermission');
    Route::post('/permission', [PermissionController::class, 'createPermission'])->name('create.permission');
    // Route::delete('/permission/{id}', [PermissionController::class, 'destroy'])->name('permission.destroy');
   
   
    Route::resource('/branch', BranchController::class);

});


