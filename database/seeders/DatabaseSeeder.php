<?php

namespace Database\Seeders;

use App\Models\Toll;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        Toll::create([
            "name" => "toll1",
            "city" => "Malaga",
            "earned" => 0
        ]);

        VehicleType::create([
            "type" => "car",
            "price" => 100
        ]);

        VehicleType::create([
            "type" => "motorbike",
            "price" => 50
        ]);

        VehicleType::create([
            "type" => "2 axle truck",
            "price" => 100
        ]);

        VehicleType::create([
            "type" => "3 axle truck",
            "price" => 150
        ]);

        VehicleType::create([
            "type" => "4 axle truck",
            "price" => 200
        ]);

        $vehicle = Vehicle::create([
            "vehicle_type_id" => 1,
            "registration" => "X1296C2",
            "spent" => 0
        ]);
    }
}
