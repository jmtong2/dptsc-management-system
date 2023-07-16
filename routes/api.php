<?php

use App\Http\Controllers\DriverAttendanceController;
use App\Http\Controllers\DriverAvailabilityController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\DriverScheduleController;
use App\Http\Controllers\EventAttendeesController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IdTypeController;
use App\Http\Controllers\SeatCancellationController;
use App\Http\Controllers\SeatReservationController;
use App\Http\Controllers\TellerRecordController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VehicleAvailabilityController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//login
Route::post('login', [UsersController::class, 'login']);

//routes that require authentication
Route::group(['middleware' => 'auth:sanctum'], function () {
    //User Routes
    Route::post('logout',[UsersController::class, 'logout'])
        ->name('logout');

    Route::post('register', [UsersController::class, 'register']);

    Route::resource('users', UsersController::class);
    Route::post("users/update-password", [UsersController::class, 'updatePassword']);

    Route::resource("vehicle-types", VehicleTypeController::class);

    Route::resource("vehicles", VehicleController::class);

    Route::resource("drivers", DriverController::class);

    Route::resource("id-types", IdTypeController::class);

    Route::resource("driver-schedules", DriverScheduleController::class);

    Route::resource("driver-availabilities", DriverAvailabilityController::class);

    Route::resource("vehicle-availabilities", VehicleAvailabilityController::class);

    Route::resource("driver-attendances", DriverAttendanceController::class);

    Route::resource("events", EventController::class);

    Route::resource("event-attendees", EventAttendeesController::class);

    Route::resource("trips", TripController::class);

    Route::resource("teller-records", TellerRecordController::class);

    Route::resource("seat-reservations", SeatReservationController::class);

    Route::resource("seat-cancellations", SeatCancellationController::class);
});

