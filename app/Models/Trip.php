<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trip extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'driver_id',
        'vehicle_id',
        'expected_arrival_time',
        'expected_departure_time',
        'seats_available',
        'created_by',
        'updated_by',
        'status',
        'archive'
    ];

    //driver
    public function drivers()
    {
        return $this->belongsTo(Driver::class,"driver_id","id");
    }

    //vehicle
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    //created by
    public function createdBy()
    {
        return $this->belongsTo(User::class,'created_by');
    }

    //updated by
    public function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by');
    }
}
