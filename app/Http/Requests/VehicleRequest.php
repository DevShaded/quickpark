<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'license_plate' => ['required', 'regex:/[A-Z]{2}[0-9]{5}/', 'unique:vehicles,license_plate', 'max:7'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
