<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'event_name',
        'event_description',
        'event_start_time',
        'event_end_time',
        'event_location',
        'created_by',
        'updated_by',
        'status',
        'archive'
    ];
}
