<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\DriverAttendance;
use App\Trait\CustomJsonResponse;
use Illuminate\Http\Request;

class DriverAttendanceController extends Controller
{
    use CustomJsonResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // list all driver attendances
        if (\request()->is("api/*")){
            return $this->success(DriverAttendance::all(), 'Driver attendances retrieved successfully');
        }

        return view("pages.driver-attendances.list",[
            "driverAttendances" => DriverAttendance::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("pages.driver-attendances.create",[
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
            'driver_id' => 'required|integer|exists:drivers,id',
            'attendance_time' => 'required|date',
        ]);

        // create driver attendance
        $driverAttendance = DriverAttendance::create($request->all());

        // check if driver attendance was created
        if ($request->is("api/*")){
            if ($driverAttendance) {
                return $this->success($driverAttendance, 'Driver attendance created successfully',201);
            }else{
                return $this->error('Driver attendance could not be created');
            }
        }

        return view("pages.driver-attendances.list",[
            "driverAttendances" => DriverAttendance::all(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DriverAttendance $driverAttendance)
    {
        // show driver attendance details
        return $this->success($driverAttendance, 'Driver attendance retrieved successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DriverAttendance $driverAttendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DriverAttendance $driverAttendance)
    {
        // validate request
        $request->validate([
            'driver_id' => 'required|integer|exists:drivers,id',
            'attendance_time' => 'required|date',
        ]);

        // update driver attendance
        $driverAttendance->update($request->all());

        return $this->success($driverAttendance, 'Driver attendance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DriverAttendance $driverAttendance)
    {
        // delete driver attendance
        $driverAttendance->delete();

        //check if trashed
        if ($driverAttendance->trashed()) {
            return $this->success($driverAttendance, 'Driver attendance deleted successfully');
        }else{
            return $this->error('Driver attendance could not be deleted');
        }
    }
}
