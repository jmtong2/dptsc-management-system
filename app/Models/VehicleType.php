<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleType extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'type',
        'created_by',
        'updated_by',
        'status',
        'archive',
    ];

    protected $hidden = [
        'deleted_at'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function vehicles(){
        return $this->hasMany(Vehicle::class);
    }

    //created by
    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }

    //updated by
    public function updatedBy(){
        return $this->belongsTo(User::class,'updated_by');
    }
}
