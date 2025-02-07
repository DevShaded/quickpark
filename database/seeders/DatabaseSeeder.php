<?php

namespace Database\Seeders;

use App\Models\ParkingAssignment;
use App\Models\ParkingSlot;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $vehicles = Vehicle::factory(10)->create();
        $slots = ParkingSlot::factory(20)->create();

        foreach ($vehicles as $vehicle) {
            // Check if there is an available slot
            $availableSlot = $slots->where('status', 'available')->random();

            if ($availableSlot) {
                ParkingAssignment::create([
                    'license_plate' => $vehicle->license_plate,
                    'slot_id' => $availableSlot->id,
                    'assigned_at' => now(),
                    'expires_at' => now()->addDays(rand(1, 7)),
                ]);

                $availableSlot->update(['status' => 'occupied']);
            }
        }
    }
}
