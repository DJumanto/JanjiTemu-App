<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetEventController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;

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

Route::get('/', [GetEventController::class, 'GetSomeEventLists']);
Route::get('/group',[GroupController::class, 'GetGroup'])->name('group.getgroup');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
//todo 
//add get event by group id
//add change routing to {{group_id}}
Route::middleware('auth')->group(function () {
    Route::get('/creategroup', function(){
        return view('creategroup');
    })->name('group.getcreate');
    Route::prefix('/group/{group_id}')->group(function () {
        Route::get('/event/add', [EventController::class, 'index'])->name('event.index'); // add event to group
        Route::post('/event/add', [EventController::class, 'CreateEvent'])->name('event.store'); // add event to group
        Route::patch('/event/update/{event_id}', [EventController::class, 'UpdateEvent'])->name('event.update'); // update event
        Route::delete('/event/delete/{event_id}', [EventController::class, 'DeleteEvent'])->name('event.delete'); // delete event
    });
    Route::get('/event', [EventController::class, 'FindEvent'])->name('event.search'); //search event
    Route::get('dashboard/event/',[EventController::class, 'GetEventByUserID'])->name('event.getevent'); //get event by user id
    Route::post('/creategroup', [GroupController::class, 'CreateGroup'])->name('group.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
