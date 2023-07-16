<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventAttendees extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'event_attendees';

    protected $fillable = [
        'event_id',
        'driver_id',
        'driver_reliever_id',
        'status',
        'created_by',
        'updated_by',
        'archive'
    ];

    //driver
    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }

    //driver reliever
    public function driverReliever()
    {
        return $this->belongsTo(Driver::class, 'driver_reliever_id');
    }

    //event
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
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
