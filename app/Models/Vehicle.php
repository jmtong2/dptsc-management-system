<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'registration_number',
        'vehicle_type_id',
        'capacity',
        'created_by',
        'updated_by',
        'status',
        'archive'
    ];

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
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
