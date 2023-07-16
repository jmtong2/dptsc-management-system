<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DriverAvailability extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'driver_id',
        'availability_week_start_date',
        'availability_week_end_date',
        'created_by',
        'updated_by',
        'status',
        'archive'
    ];

    public function driver(){
        return $this->belongsTo(Driver::class,"driver_id");
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
