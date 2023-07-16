<?php

namespace App\Http\Controllers;

use App\Models\VehicleType;
use App\Trait\CustomJsonResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VehicleTypeController extends Controller
{
    use CustomJsonResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //check if request is an api request
        if (request()->is('api/*')) {
            //return vehicle type list
            return self::success(
                'Vehicle Type List Fetched Successfully',
                VehicleType::all()
            );
        }

        return view('pages.vehicle-types.list', [
            'vehicleTypes' => VehicleType::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.vehicle-types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate request
        $request->validate([
            'type' => 'required|string'
        ]);

        //create new vehicle type
        $vehicleType = VehicleType::create([
            'type' => $request->type
        ]);

        //check if the request is an api request
        if (request()->is('api/*')) {
            //return response
            return self::success(
                'Vehicle Type Created Successfully',
                $vehicleType,
                Response::HTTP_CREATED
            );
        }

        return redirect()->route('vehicle-types.index')->with([
            'success' => 'Vehicle Type Created Successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(VehicleType $vehicleType)
    {
        //return the vehicle type
        return self::success(
            'Vehicle Type Fetched Successfully',
            $vehicleType
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VehicleType $vehicleType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VehicleType $vehicleType)
    {
        //
        //validate request
        $request->validate([
            'type' => 'required|string'
        ]);

        //update vehicle type
        $vehicleType->update([
            'type' => $request->type
        ]);

        //return response
        return self::success(
            'Vehicle Type Updated Successfully',
            $vehicleType
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VehicleType $vehicleType)
    {
        //delete vehicle type
        $vehicleType->delete();
        //check if vehicle type was deleted
        if ($vehicleType->trashed()) {
            //return response
            return self::success(
                'Vehicle Type Deleted Successfully',
                $vehicleType
            );
        }else{
            //return response
            return self::error(
                'Vehicle Type Deletion Failed'
            );
        }
    }
}
