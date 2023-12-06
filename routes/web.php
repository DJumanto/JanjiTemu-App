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
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
// // Route untuk keperluan pengembangan FE Group Detail + Create Group
// Route::get('/group/fegd', [GroupController::class, 'ShowGroupDetailTest'])->name('group.testgd');
// // Route untuk keperluan pengembangan FE Group Detail + Create Group + Create Event
// Route::get('/group/fegd/eventcreate', [GroupController::class, 'ShowCreateEventTest'])->name('group.testcreateevent');
//todo 
//add get event by group id
//add change routing to {{group_id}}
Route::middleware('auth')->group(function () {
    Route::get('/group', [GroupController::class, 'GetGroup'])->name('group.getgroup');
    Route::post('/group/search', [GroupController::class, 'SearchGroup'])->name('group.search');
    Route::prefix('/group/{group_id}')->group(function () {
        Route::get('/', [GroupController::class, 'GetGroupById'])->name('group.getgroupbyid');
        Route::post('/join', [GroupController::class, 'JoinGroup'])->name('group.joingroup');
        Route::prefix('/event')->group(function () {
            Route::get('/', [EventController::class, 'GetEventInGroup'])->name('event.geteventbygroup');
            Route::get('/{event_id}', [EventController::class, 'GetEventDetail'])->name('event.geteventdetail');
            Route::post('/{event_id}/join', [EventController::class, 'JoinEvent'])->name('event.joinevent');
            Route::get('/{event_id}/comment', [EventController::class, 'GetEventComment'])->name('event.getcomment');
            Route::post('/{event_id}/comment', [EventController::class, 'AddEventCommentary'])->name('event.postcomment');
            Route::get('/create', [EventController::class, 'index'])->name('event.index'); // add event to group
            Route::post('/create', [EventController::class, 'CreateEvent'])->name('event.store'); // add event to group
            Route::patch('/update/{event_id}', [EventController::class, 'UpdateEvent'])->name('event.update'); // update event
            Route::delete('/delete/{event_id}', [EventController::class, 'DeleteEvent'])->name('event.delete'); // delete event
        });
    });
    Route::get('/event', [EventController::class, 'SearchEvent'])->name('event.search'); //search event
    Route::get('dashboard/event/', [EventController::class, 'GetEventByUserID'])->name('event.getevent'); //get event by user id
    Route::get('/creategroup', [GroupController::class, 'index'])->name('group.getcreate');
    Route::post('/creategroup', [GroupController::class, 'CreateGroup'])->name('group.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
