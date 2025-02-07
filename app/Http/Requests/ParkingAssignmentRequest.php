<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParkingAssignmentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'license_plate' => ['required', 'exists:vehicles'],
            'parking_slot_id' => ['required', 'exists:parking_slots'],
            'assigned_at' => ['required', 'date'],
            'expires_at' => ['required', 'date'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
