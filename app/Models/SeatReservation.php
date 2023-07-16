<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeatReservation extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'contact_number',
        'id_type_id',
        'id_number',
        'reservation_date',
        'number_of_seats',
        'trip_id',
        'created_by',
        'updated_by',
        'status',
        'archive'
    ];

    public function idType()
    {
        return $this->belongsTo(IdType::class);
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class,'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by');
    }
}
