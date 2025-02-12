<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'license_plate' => ['required', 'regex:/[A-Z]{2}[0-9]{5}/', 'max:7', 'unique:vehicles,license_plate'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function messages(): array
    {
        return [
            'license_plate.required' => 'Du må fylle inn skiltnummeret.',
            'license_plate.regex' => 'Skiltnummeret må være på formatet XX12345.',
            'license_plate.max' => 'Skiltnummeret kan ikke være lengre enn 7 tegn.',
            'license_plate.unique' => 'Skiltnummeret er allerede i bruk.',
        ];
    }
}
