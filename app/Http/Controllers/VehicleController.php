<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleType;
use App\Trait\CustomJsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VehicleController extends Controller
{
    use CustomJsonResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return list of vehicles
        //check if request is api
        if (request()->is('api/*')) {
            return $this->success(Vehicle::all(), 'Vehicles retrieved successfully');
        }
        return view('pages.vehicles.list', [
            'vehicles' => Vehicle::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.vehicles.create', [
            'vehicleTypes' => VehicleType::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //validate request
        $request->validate([
            'registration_number' => 'required|unique:vehicles',
            'vehicle_type_id' => 'required|exists:vehicle_types,id',
            'capacity' => 'required|integer'
        ]);

        //create vehicle
        $vehicle = Vehicle::create($request->all());

        //if request is api
        if (request()->is('api/*')) {
            return $this->success($vehicle, 'Vehicle created successfully', Response::HTTP_CREATED);
        }

        return redirect()->route('vehicles.index')->with('success', 'Vehicle created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        //show vehicle details
        return $this->success($vehicle, 'Vehicle retrieved successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //validate request
        $request->validate([
            'registration_number' => 'required|unique:vehicles,registration_number,' . $vehicle->id,
            'vehicle_type_id' => 'required|exists:vehicle_types,id',
            'capacity' => 'required|integer'
        ]);

        //update vehicle
        $vehicle->update($request->all());

        //return response
        return $this->success($vehicle, 'Vehicle updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        //
        $vehicle->delete();

        //check if deleted
        if ($vehicle->trashed()) {
            return $this->success(null, 'Vehicle deleted successfully');
        }else{
            return $this->error('Vehicle could not be deleted');
        }
    }
}
