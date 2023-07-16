<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeatCancellation extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'reservation_id',
        'cancellation_date',
        'cancellation_reason',
        'created_by',
        'updated_by',
        'status',
        'archive'
    ];
}
