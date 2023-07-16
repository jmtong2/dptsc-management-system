<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleAvailability;
use App\Trait\CustomJsonResponse;
use Illuminate\Http\Request;

class VehicleAvailabilityController extends Controller
{
    use CustomJsonResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // list all vehicle availabilities
        if (request()->is('api/*')){
            return $this->success(VehicleAvailability::all(), 'Vehicle availabilities list');
        }

        return view('pages.vehicle-availabilities.list', [
            'vehicleAvailabilities' => VehicleAvailability::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $vehicles = Vehicle::all();
        return view('pages.vehicle-availabilities.create')
            ->with(compact('vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'vehicle_id' => 'required|integer|exists:vehicles,id',
            'availability_week_start_date' => 'required|date',
            'availability_week_end_date' => 'required|date|after_or_equal:availability_week_start_date',
        ]);

        // create new vehicle availability
        $vehicleAvailability = VehicleAvailability::create($request->all());

        //check if is api
        if (request()->is('api/*')) {
            // check creation success
            if ($vehicleAvailability) {
                return $this->success($vehicleAvailability, 'Vehicle availability created successfully',201);
            } else {
                return $this->error('Vehicle availability creation failed');
            }
        }

        return redirect()->route('vehicle-availabilities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(VehicleAvailability $vehicleAvailability)
    {
        // show single vehicle availability
        return $this->success($vehicleAvailability, 'Vehicle availability details');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VehicleAvailability $vehicleAvailability)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VehicleAvailability $vehicleAvailability)
    {
        // validate request
        $request->validate([
            'vehicle_id' => 'required|integer|exists:vehicles,id',
            'availability_week_start_date' => 'required|date',
            'availability_week_end_date' => 'required|date|after_or_equal:availability_week_start_date',
        ]);

        // update vehicle availability
        $vehicleAvailability->update($request->all());

        // return success
        return $this->success($vehicleAvailability, 'Vehicle availability updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VehicleAvailability $vehicleAvailability)
    {
        // delete vehicle availability
        $vehicleAvailability->delete();

        //check deletion success
        if ($vehicleAvailability->trashed()) {
            return $this->success($vehicleAvailability, 'Vehicle availability deleted successfully');
        } else {
            return $this->error('Vehicle availability deletion failed');
        }
    }
}
