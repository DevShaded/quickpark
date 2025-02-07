<?php

namespace App\Models;

use App\Enums\ParkingSlotStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ParkingSlot extends Model
{
    use HasFactory;

    protected $fillable = [
        'slot_number',
        'status',
    ];

    protected $casts = [
        'status' => ParkingSlotStatus::class,
    ];

    public function parkingAssignment(): HasOne
    {
        return $this->hasOne(ParkingAssignment::class);
    }
}
