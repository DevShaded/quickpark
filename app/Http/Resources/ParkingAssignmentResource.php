<?php

namespace App\Http\Resources;

use App\Models\ParkingAssignment;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin ParkingAssignment */
class ParkingAssignmentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'license_plate' => $this->license_plate,
            'parking_slot_id' => $this->slot_id,
            'assigned_at' => $this->assigned_at,
            'expires_at' => $this->expires_at,
            'vehicle' => new VehicleResource($this->whenLoaded('vehicle')),
            'parking_slot' => new ParkingSlotResource($this->whenLoaded('parkingSlot')),
        ];
    }
}
