<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App_User_Controller;

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
    return view('welcome');
});

Route::get('/app_user', [App_User_Controller::class, 'index'])->name('app_user.index');
Route::get('/app_user/addpage', [App_User_Controller::class, 'addview'])->name('app_user.addview');
Route::post('/app_user', [App_User_Controller::class, 'add'])->name('app_user.add');
