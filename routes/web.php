<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\FullCalendarController;

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


Route::get('fullcalendar', [CalendarController::class, 'index'])->name('fullcalendar');
Route::post('create-event', [CalendarController::class, 'create'])->name('create-event');
Route::post('event-update', [CalendarController::class, 'update'])->name('event-update');

Route::resource('booking-calendar', FullCalendarController::class);
Route::get('event-delete/{id}', [FullCalendarController::class, 'delete'])->name('event-delete');