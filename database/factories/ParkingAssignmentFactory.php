<?php

namespace Database\Factories;

use App\Models\ParkingAssignment;
use App\Models\ParkingSlot;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ParkingAssignmentFactory extends Factory
{
    protected $model = ParkingAssignment::class;

    public function definition(): array
    {
        return [
            'license_plate' => Vehicle::factory(),
            'slot_id' => ParkingSlot::factory(),
            'assigned_at' => Carbon::now(),
            'expires_at' => Carbon::now()->addHours(2),
        ];
    }
}
