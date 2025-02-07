<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ParkingAssignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_plate',
        'slot_id',
        'assigned_at',
        'expires_at',
    ];

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class, 'license_plate', 'license_plate');
    }

    public function parkingSlot(): BelongsTo
    {
        return $this->belongsTo(ParkingSlot::class, 'slot_id');
    }
}
