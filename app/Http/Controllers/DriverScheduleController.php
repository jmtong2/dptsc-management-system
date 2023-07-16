<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\DriverSchedule;
use App\Trait\CustomJsonResponse;
use Illuminate\Http\Request;

class DriverScheduleController extends Controller
{
    use CustomJsonResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // list all driver schedules
        if (request()->is("api/*")){
            return $this->success(DriverSchedule::all(), 'Driver schedules list');
        }

        return view('pages.driver-schedules.list', [
            'driverSchedules' => DriverSchedule::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.driver-schedules.create',[
            "drivers" => Driver::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'driver_id' => 'required|exists:drivers,id',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
        ]);

        // create new driver schedule
        $driverSchedule = DriverSchedule::create($request->all());

        //validate if driver schedule was created
        if ($request->is("api/*")){
            if ($driverSchedule) {
                return $this->success($driverSchedule, 'Driver schedule created', 201);
            }else{
                return $this->error('Driver schedule not created', 500);
            }
        }

        return view('pages.driver-schedules.list', [
            'driverSchedules' => DriverSchedule::all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DriverSchedule $driverSchedule)
    {
        // show driver schedule details
        return $this->success($driverSchedule, 'Driver schedule details');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DriverSchedule $driverSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DriverSchedule $driverSchedule)
    {
        // validate request
        $request->validate([
            'driver_id' => 'required|exists:drivers,id',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
        ]);

        // update driver schedule
        $driverSchedule->update($request->all());

        //validate if driver schedule was updated
        if ($driverSchedule) {
            return $this->success($driverSchedule, 'Driver schedule updated');
        }else{
            return $this->error('Driver schedule not updated', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DriverSchedule $driverSchedule)
    {
        // delete record
        $driverSchedule->delete();

        //validate if driver schedule was deleted
        if ($driverSchedule->trashed()) {
            return $this->success($driverSchedule, 'Driver schedule deleted');
        }else{
            return $this->error('Driver schedule not deleted', 500);
        }
    }
}
