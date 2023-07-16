<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DriverSchedule extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'driver_id',
        'start_time',
        'end_time',
        'created_by',
        'updated_by',
        'status',
        'archive'
    ];

    //driver
    public function driver(){
        return $this->belongsTo(Driver::class);
    }

    //created by
    public function createdBy(){
        return $this->belongsTo(User::class, 'created_by');
    }

    //updated by
    public function updatedBy(){
        return $this->belongsTo(User::class, 'updated_by');
    }
}
