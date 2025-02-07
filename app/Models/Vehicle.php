<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_plate',
        'registered_at',
    ];

    // Retrieve the parking assignment of the vehicle
    public function parkingAssignment(): HasOne
    {
        return $this->hasOne(ParkingAssignment::class, 'license_plate', 'license_plate');
    }

    // Retrieve the parking slot assigned to the vehicle
    public function parkingSlot(): HasOneThrough
    {
        return $this->hasOneThrough(ParkingSlot::class, ParkingAssignment::class, 'license_plate', 'id', 'license_plate', 'slot_id');
    }
}
