<?php

namespace App\Http\Resources;

use App\Models\ParkingSlot;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin ParkingSlot */
class ParkingSlotResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'slot_number' => $this->slot_number,
            'status' => $this->status,
            'parking_assignment' => new ParkingAssignmentResource($this->whenLoaded('parkingAssignment')),
        ];
    }
}
