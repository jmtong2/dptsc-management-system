<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleAvailability extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'vehicle_id',
        'availability_week_start_date',
        'availability_week_end_date',
        'status',
        'archive',
        'created_by',
        'updated_by'
    ];

    //vehicle
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    //created by
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    //updated by
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
