<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\LogController;

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

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/register', [AdminController::class, 'register_user'])->name('admin.register');
    Route::post('admin/register/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('admin/edit/user/{user}', [AdminController::class, 'edit']);
    Route::post('admin/update/{user}', [AdminController::class, 'update']);
    Route::get('admin/delete/user', [AdminController::class, 'destroy']);
    Route::get('state_list', [StateController::class, 'state_list']);
    Route::get('admin/municipality_list', [MunicipalityController::class, 'municipality_list']);
    Route::get('/admin/emails/', [AdminController::class, 'email'])->name('email');
    Route::get('/admin/logs/', [LogController::class, 'index'])->name('logs');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [EmailController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/email/', [EmailController::class, 'create'])->name('email.create');
    Route::post('/dashboard/email/store', [EmailController::class, 'store'])->name('email.store');

});