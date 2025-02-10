<?php

namespace App\Actions\Parking;

use App\Enums\ParkingSlotStatus;
use App\Models\ParkingSlot;
use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AssignVehicleToParkingAction
{
    public static function handle(array $vehicleRequest): ?Vehicle
    {
        $parkingSlot = ParkingSlot::where('status', ParkingSlotStatus::AVAILABLE)->first();

        if (! $parkingSlot) {
            return null;
        }

        DB::transaction(function () use ($vehicleRequest) {
            $vehicle = Vehicle::create([
                'license_plate' => Str::upper($vehicleRequest['license_plate']),
                'registered_at' => Carbon::now(),
            ]);

            $vehicle->parkingAssignment()->create([
                'license_plate' => Str::upper($vehicleRequest['license_plate']),
                'slot_id' => ParkingSlot::where('status', ParkingSlotStatus::AVAILABLE)->first()->id,
                'assigned_at' => Carbon::now(),
                'expires_at' => Carbon::now()->addHours(2),
            ]);

            ParkingSlot::where('status', ParkingSlotStatus::AVAILABLE)->first()->update([
                'status' => ParkingSlotStatus::OCCUPIED,
            ]);

            cache()->forget('parking_slots');
        });

        return Vehicle::where('license_plate', Str::upper($vehicleRequest['license_plate']))->first();
    }
}
