<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\TellerRecord;
use App\Models\Vehicle;
use App\Trait\CustomJsonResponse;
use Illuminate\Http\Request;

class TellerRecordController extends Controller
{
    use CustomJsonResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // list all teller records
        if (\request()->is("api/*")){
            return $this->success(TellerRecord::all(), 'Teller records retrieved successfully');
        }

        return view('pages.teller-records.list', [
            'tellerRecords' => TellerRecord::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.teller-records.create',[
            "drivers" => Driver::all(),
            "vehicles" => Vehicle::all(),
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
            'vehicle_id' => 'required|exists:vehicles,id',
            'dispatch_time' => 'required|date',
            'terminal_exit_time' => 'required|date',
        ]);

        // create new teller record
        $tellerRecord = TellerRecord::create($request->all());

        // confirm addition
        if ($request->is("api/*")){
            if ($tellerRecord) {
                return $this->success($tellerRecord, 'Teller record created successfully',201);
            }else{
                return $this->error('Teller record creation failed');
            }
        }

        return view('pages.teller-records.list', [
            'tellerRecords' => TellerRecord::all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TellerRecord $tellerRecord)
    {
        // show teller record
        return $this->success($tellerRecord, 'Teller record retrieved successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TellerRecord $tellerRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TellerRecord $tellerRecord)
    {
        // validate request
        $request->validate([
            'driver_id' => 'required|exists:drivers,id',
            'vehicle_id' => 'required|exists:vehicles,id',
            'dispatch_time' => 'required|date_format:Y-m-d H:i:s',
            'terminal_exit_time' => 'required|date_format:Y-m-d H:i:s',
        ]);

        // update teller record
        $tellerRecord->update($request->all());

        return $this->success($tellerRecord, 'Teller record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TellerRecord $tellerRecord)
    {
        // delete record
        $tellerRecord->delete();

        // confirm deletion
        if ($tellerRecord->trashed()) {
            return $this->success($tellerRecord, 'Teller record deleted successfully');
        }else{
            return $this->error('Teller record deletion failed');
        }
    }
}
