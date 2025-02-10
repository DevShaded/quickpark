<?php

namespace App\Http\Controllers;

use App\Actions\Parking\AssignVehicleToParkingAction;
use App\Enums\ParkingSlotStatus;
use App\Http\Requests\VehicleRequest;
use App\Http\Resources\ParkingSlotResource;
use App\Models\ParkingSlot;
use Inertia\Inertia;
use Inertia\Response;

class ParkingController extends Controller
{
    public function index(): Response
    {
        // Get all available parking slots and cache remember for 1 minute
        $parkingSlots = cache()->remember('parking_slots', 60, function () {
            return ParkingSlotResource::collection(
                ParkingSlot::where('status', ParkingSlotStatus::AVAILABLE)->get()
            );
        });

        return Inertia::render('Index', [
            'availableParkingSlots' => ParkingSlot::where('status', ParkingSlotStatus::AVAILABLE)->count(),
            'parkingSlots' => $parkingSlots,
        ]);
    }

    public function store(VehicleRequest $request)
    {
        $validated = $request->validated();

        $vehicle = AssignVehicleToParkingAction::handle($validated);

        if (! $vehicle) {
            return redirect()->route('home')->with('error', 'Parkeringsplassen er full for øyeblikket.');
        }

        $parkingSlotNumber = $vehicle->parkingSlot->slot_number;

        return redirect()->route('home')->with('success', "Kjøretøyet kan nå bli parkert på $parkingSlotNumber.");
    }
}
