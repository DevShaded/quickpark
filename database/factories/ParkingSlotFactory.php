<?php

namespace Database\Factories;

use App\Enums\ParkingSlotStatus;
use App\Models\ParkingSlot;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ParkingSlotFactory extends Factory
{
    protected $model = ParkingSlot::class;

    public function definition(): array
    {
        return [
            'slot_number' => $this->faker->regexify('P-\d{3}'),
            'status' => ParkingSlotStatus::AVAILABLE,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
