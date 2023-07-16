<?php

namespace App\Http\Controllers;

use App\Models\SeatCancellation;
use App\Models\SeatReservation;
use App\Trait\CustomJsonResponse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Ramsey\Uuid\Exception\UnableToBuildUuidException;

class SeatCancellationController extends Controller
{
    use CustomJsonResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // list all seat cancellations
        if (\request()->is("api/*")){
            return $this->success(SeatCancellation::all(), 'Seat Cancellations retrieved successfully');
        }

        return view("pages.seat-cancellations.list",[
            "seatCancellations" => SeatCancellation::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("pages.seat-cancellations.create",[
            "seatReservations" => SeatReservation::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'reservation_id' => 'required|exists:seat_reservations,id|unique:seat_cancellations,reservation_id',
//            'cancellation_date' => 'required|date_format:Y-m-d H:i:s',
            'cancellation_reason' => 'required|string',
        ]);

        $request["cancellation_date"] = Carbon::now();

        // create seat cancellation
        $seatCancellation = SeatCancellation::create($request->all());

        // confirm creation
        if ($request->is("api/*")){
            if ($seatCancellation) {
                return $this->success($seatCancellation, 'Seat Cancellation created successfully',201);
            }else{
                return $this->error('Seat Cancellation could not be created');
            }
        }

        return view("pages.seat-cancellations.list",[
            "seatCancellations" => SeatCancellation::all(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(SeatCancellation $seatCancellation)
    {
        // show seat cancellation
        return $this->success($seatCancellation, 'Seat Cancellation retrieved successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SeatCancellation $seatCancellation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SeatCancellation $seatCancellation)
    {
        // validate request
        $request->validate([
            'reservation_id' => 'required|exists:seat_reservations,id',
            'cancellation_date' => 'required|date_format:Y-m-d H:i:s',
            'cancellation_reason' => 'required|string',
        ]);

        // update seat cancellation
        $seatCancellation->update($request->all());

        return $this->success($seatCancellation, 'Seat Cancellation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SeatCancellation $seatCancellation)
    {
        // delete seat cancellation
        $seatCancellation->delete();

        // confirm deletion
        if ($seatCancellation->trashed()) {
            return $this->success($seatCancellation, 'Seat Cancellation deleted successfully');
        }else{
            return $this->error('Seat Cancellation could not be deleted');
        }
    }
}
