<?php

use App\Http\Controllers\DriverAttendanceController;
use App\Http\Controllers\DriverAvailabilityController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\DriverScheduleController;
use App\Http\Controllers\EventAttendeesController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdTypeController;
use App\Http\Controllers\SeatCancellationController;
use App\Http\Controllers\SeatReservationController;
use App\Http\Controllers\TellerRecordController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VehicleAvailabilityController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleTypeController;
use Illuminate\Support\Facades\Route;

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

require __DIR__.'/auth.php';

//Route::get('/', function () {
//    return view('dashboards.dashboard1');
//});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function (){
    Route::get("dashboard1", [VehicleTypeController::class,"index"])->name("dashboard1");
    Route::resource("vehicle-types", VehicleTypeController::class);
    Route::resource("vehicles", VehicleController::class);
    Route::resource("vehicle-availabilities", VehicleAvailabilityController::class);
    Route::resource("trips", TripController::class);
    Route::resource("id-types", IdTypeController::class);
    Route::resource("drivers", DriverController::class);
    Route::resource("driver-attendances", DriverAttendanceController::class);
    Route::resource("driver-availabilities", DriverAvailabilityController::class);
    Route::resource("driver-schedules", DriverScheduleController::class);
    Route::resource("events", EventController::class);
    Route::resource("event-attendees", EventAttendeesController::class);
    Route::resource("users", UsersController::class);
    Route::resource("teller-records", TellerRecordController::class);
    Route::resource("seat-reservations", SeatReservationController::class);
    Route::resource("seat-cancellations", SeatCancellationController::class);

    // Dashboard Routes
    Route::get("/",[VehicleTypeController::class, 'index'])->name('dashboard.1');

    //App Details Pages Routs
    Route::group(['prefix' => 'app'], function() {

        //Userdetail Page Routs
        Route::get('user/profile', [HomeController::class, 'userprofile'])->name('app.userdetail.userprofile');
        Route::get('user/add', [HomeController::class, 'useradd'])->name('app.userdetail.useradd');
        Route::get('user/userlist', [HomeController::class, 'userList'])->name('app.userdetail.userlist');

    });

    //Auth pages Routs
    Route::group(['prefix' => 'auth'], function() {
        Route::get('login', [HomeController::class, 'authLogin'])->name('auth.login');
        Route::get('register', [HomeController::class, 'authRegister'])->name('auth.register');
        Route::get('recover-password', [HomeController::class, 'authRecoverPassword'])->name('auth.recover-password');
        Route::get('confirm-email', [HomeController::class, 'authConfirmEmail'])->name('auth.confirm-email');

    });

    Route::group(['prefix' => 'extra'], function (){
        Route::get('privacy', [HomeController::class, 'privacy'])->name('privacy');
        Route::get('term-service', [HomeController::class, 'termService'])->name('term-service');
    });
});











