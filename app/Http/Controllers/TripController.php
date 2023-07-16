<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Trip;
use App\Models\Vehicle;
use App\Trait\CustomJsonResponse;
use Illuminate\Http\Request;

class TripController extends Controller
{
    use CustomJsonResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // list all trips
        // if request is api
        if (request()->is('api/*')) {
            return $this->success(Trip::all(), "Trips list retrieved successfully",200);
        }

        // if request is web
        return view('pages.trips.list', [
            'trips' => Trip::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.trips.create')->with([
            'drivers' => Driver::all(),
            'vehicles' => Vehicle::all()
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
            'vehicle_id' => 'required|integer|exists:vehicles,id',
            'expected_arrival_time' => 'required|date',
            'expected_departure_time' => 'required|date|after:expected_arrival_time',
            'seats_available' => 'required|integer|min:1',
        ]);

        // create trip
        $trip = Trip::create($request->all());

        // check if trip was created
        if (!$trip) {
            return $this->error("An error occurred while creating trip",500);
        }

        //if request api
        if (request()->is('api/*')) {
            return $this->success($trip, "Trip created successfully",201);
        }


        return redirect()->route('trips.index')->with([
            'success' => "Trip created successfully"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        // show trip details
        return $this->success($trip, "Trip details retrieved successfully",200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        // validate request
        $request->validate([
            'driver_id' => 'required|integer|exists:drivers,id',
            'vehicle_id' => 'required|integer|exists:vehicles,id',
            'expected_arrival_time' => 'required|date_format:Y-m-d H:i:s',
            'expected_departure_time' => 'required|date_format:Y-m-d H:i:s|after:expected_arrival_time',
            'seats_available' => 'required|integer|min:1',
        ]);

        // update trip
        $trip->update($request->all());

        // return response
        return $this->success($trip, "Trip updated successfully",200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        // delete trip
        $trip->delete();

        //confirm deletion
        if ($trip->trashed()) {
            return $this->success($trip, "Trip deleted successfully");
        }else{
            return $this->error("An error occurred while deleting trip",500);
        }
    }
}
