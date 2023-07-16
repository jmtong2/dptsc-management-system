<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Trait\CustomJsonResponse;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    use CustomJsonResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //list all drivers
        if (\request()->is("api/*")){
            return $this->success(Driver::all(), 'Drivers retrieved successfully');
        }

        return view("pages.drivers.list",[
            'drivers' => Driver::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("pages.drivers.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'name' => 'required|string',
            'contact_number' => 'required|string|unique:drivers',
        ]);

        // create driver
        $driver = Driver::create($request->all());

        // return response
        if ($request->is("api/*")){
            if ($driver) {
                return $this->success($driver, 'Driver created successfully');
            }else{
                return $this->error('Driver creation failed');
            }
        }

        return view("pages.drivers.list",[
            "drivers" => Driver::all(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        // show single driver details
        return $this->success($driver, 'Driver retrieved successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        // validate request
        $request->validate([
            'name' => 'required|string',
            'contact_number' => 'required|string|unique:drivers,contact_number,'.$driver->id,
        ]);

        // update driver
        $driver->update($request->all());

        // return response
        if ($driver) {
            return $this->success($driver, 'Driver updated successfully');
        }else{
            return $this->error('Driver update failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
        // delete driver
        $driver->delete();

        //confirm deletion
        if ($driver->trashed()) {
            return $this->success($driver, 'Driver deleted successfully');
        }else{
            return $this->error('Driver deletion failed');
        }
    }
}
