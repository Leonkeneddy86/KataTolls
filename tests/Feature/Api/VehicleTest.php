<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Toll;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VehicleTest extends TestCase
{
    use RefreshDatabase;

    public function test_store(): void
    {
        VehicleType::create([
            "type" => "car",
            "price" => 100
        ]);

        $response = $this->post('/api/vehicles', [
            "vehicle_type_id" => 1,
            "registration" => "test"
        ]);

        $response->assertStatus(200)
                ->assertJsonFragment([
                    "vehicle_type_id" => 1,
                    "registration" => "test"
                ]);
    }

    public function test_goThroughToll(): void
    {
        Toll::create([
            "name" => "test",
            "city" => "test",
            "earned" => 0
        ]);

        VehicleType::create([
            "type" => "car",
            "price" => 100
        ]);

        Vehicle::create([
            "vehicle_type_id" => 1,
            "registration" => "test",
            "spent" => 0
        ]);

        $response = $this->put("/api/vehicles/1/tolls/1");

        $response->assertStatus(200)
                ->assertJsonFragment([
                    "toll_name" => "test",
                    "toll_earned" => 100,
                    "vehicle_registration" => "test",
                    "vehicle_spent" => 100
                ]);
    }
}
