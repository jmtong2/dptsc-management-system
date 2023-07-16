<?php

namespace App\Http\Controllers;

use App\Models\ReservationQRCode;
use App\Trait\CustomJsonResponse;
use Illuminate\Http\Request;

class ReservationQRCodeController extends Controller
{
    use CustomJsonResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // list all reservation qrcodes
        return $this->success(ReservationQRCode::all(), 'Reservation QR Codes retrieved successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate([
            'reservation_id' => 'required|integer|exists:seat_reservations,id',
            'q_r_code' => 'required|string',
        ]);

        // create reservation qrcode
        $reservationQRCode = ReservationQRCode::create($request->all());

        // check if reservation qrcode was created
        if ($reservationQRCode) {
            return $this->success($reservationQRCode, 'Reservation QR Code created successfully',201);
        }else{
            return $this->error('Reservation QR Code creation failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ReservationQRCode $reservationQRCode)
    {
        // return reservation qrcode
        return $this->success($reservationQRCode, 'Reservation QR Code retrieved successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReservationQRCode $reservationQRCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReservationQRCode $reservationQRCode)
    {
        // validate request
        $request->validate([
            'reservation_id' => 'required|integer|exists:seat_reservations,id',
            'q_r_code' => 'required|string',
        ]);

        // update reservation qrcode
        $reservationQRCode->update($request->all());

        return $this->success($reservationQRCode, 'Reservation QR Code updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReservationQRCode $reservationQRCode)
    {
        // delete reservation qrcode
        $reservationQRCode->delete();

        // check if trashed
        if ($reservationQRCode->trashed()) {
            return $this->success($reservationQRCode, 'Reservation QR Code deleted successfully');
        }else{
            return $this->error('Reservation QR Code deletion failed');
        }
    }
}
