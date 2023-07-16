<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\DriverAvailability;
use App\Trait\CustomJsonResponse;
use Illuminate\Http\Request;

class DriverAvailabilityController extends Controller
{
    use CustomJsonResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // list driver availabilities
        if (\request()->has("api/*")){
            return $this->success(DriverAvailability::all(), 'Driver availabilities list');
        }

        return view("pages.driver-availabilities.list",[
            "driverAvailabilities" => DriverAvailability::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("pages.driver-availabilities.create",[
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
            'availability_week_start_date' => 'required',
            'availability_week_end_date' => 'required|after_or_equal:availability_week_start_date',
        ]);

        // create driver availability
        $driverAvailability = DriverAvailability::create($request->all());

        //check if driver availability was created
        if ($request->is("api/*")){
            if ($driverAvailability) {
                return $this->success($driverAvailability, 'Driver availability created successfully',201);
            }else{
                return $this->error('Driver availability creation failed');
            }
        }

        return view("pages.driver-availabilities.list",[
            "driverAvailabilities" => DriverAvailability::all(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DriverAvailability $driverAvailability)
    {
        // show single driver availability details
        return $this->success($driverAvailability, 'Driver availability details');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DriverAvailability $driverAvailability)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DriverAvailability $driverAvailability)
    {
        // validate request
        $request->validate([
            'driver_id' => 'required|exists:drivers,id',
            'availability_week_start_date' => 'required',
            'availability_week_end_date' => 'required|after_or_equal:availability_week_start_date',
        ]);

        // update driver availability
        $driverAvailability->update($request->all());

        return $this->success($driverAvailability, 'Driver availability updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DriverAvailability $driverAvailability)
    {
        // delete driver availability
        $driverAvailability->delete();

        //check if driver availability was deleted
        if ($driverAvailability->trashed()) {
            return $this->success($driverAvailability, 'Driver availability deleted successfully');
        }else{
            return $this->error('Driver availability deletion failed',500);
        }
    }
}
