<?php

namespace App\Http\Controllers;

use App\Models\IdType;
use App\Models\SeatReservation;
use App\Models\Trip;
use App\Trait\CustomJsonResponse;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeatReservationController extends Controller
{
    use CustomJsonResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // list all seat reservations
        if (\request()->is("api/*")){
            return $this->success(SeatReservation::all(), 'Seat Reservations retrieved successfully');
        }

        return view('pages.seat-reservations.list', [
            'seatReservations' => SeatReservation::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("pages.seat-reservations.create",[
            "idTypes" => IdType::all(),
            "trips" => Trip::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'name' => 'required|string',
            'contact_number' => 'required|string',
            'id_type_id' => 'required|integer|exists:id_types,id',
            'id_number' => 'required|string',
//            'reservation_date' => 'required|date',
            'number_of_seats' => 'required|integer|min:1',
            'trip_id' => 'required|integer|exists:trips,id',
        ]);

        $request['reservation_date'] = Carbon::now();

        // create seat reservation
        $seatReservation = SeatReservation::create($request->all());

        // check if seat reservation was created
        if ($request->is("api/*")){
            if ($seatReservation) {
                return $this->success($seatReservation, 'Seat Reservation created successfully',201);
            }else{
                return $this->error('Seat Reservation creation failed');
            }
        }

        return view("pages.seat-reservations.list",[
            "seatReservations" => SeatReservation::all(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(SeatReservation $seatReservation)
    {
        // show seat reservation details
        return $this->success($seatReservation, 'Seat Reservation retrieved successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SeatReservation $seatReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SeatReservation $seatReservation)
    {
        // validate request
        $request->validate([
            'name' => 'required|string',
            'contact_number' => 'required|string',
            'id_type_id' => 'required|integer|exists:id_types,id',
            'id_number' => 'required|string',
            'reservation_date' => 'required|date',
            'number_of_seats' => 'required|integer|min:1',
            'trip_id' => 'required|integer|exists:trips,id',
        ]);

        // update seat reservation
        $seatReservation->update($request->all());

        return $this->success($seatReservation, 'Seat Reservation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SeatReservation $seatReservation)
    {
        // delete seat reservation
        $seatReservation->delete();

        //check if trashed
        if ($seatReservation->trashed()) {
            return $this->success($seatReservation, 'Seat Reservation deleted successfully');
        }else{
            return $this->error('Seat Reservation deletion failed');
        }
    }
}
