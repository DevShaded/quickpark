<?php

namespace Tests\Feature;

use App\Enums\ParkingSlotStatus;
use App\Models\ParkingSlot;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ParkingControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_assigns_a_vehicle_when_parking_slots_are_available()
    {
        ParkingSlot::factory()->create(['status' => ParkingSlotStatus::AVAILABLE]);

        $response = $this->post(route('park'), [
            'license_plate' => 'EK12345',
        ]);

        $this->assertDatabaseHas('vehicles', ['license_plate' => 'EK12345']);
        $this->assertDatabaseHas('parking_slots', ['status' => ParkingSlotStatus::OCCUPIED]);

        $response->assertRedirect(route('home'));
        $response->assertSessionHas('success', function ($msg) {
            return str_contains($msg, 'Kjøretøyet kan nå bli parkert på');
        });
    }

    public function test_it_returns_error_when_parking_is_full()
    {
        $response = $this->post(route('park'), ['license_plate' => 'EB12345']);

        $this->assertDatabaseMissing('vehicles', ['license_plate' => 'EB12345']);

        $response->assertRedirect(route('home'));
        $response->assertSessionHas('error', 'Parkeringsplassen er full for øyeblikket.');
    }
}
