<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('toll_vehicle', function (Blueprint $table) {
            $table->id();
            $table->foreignId("toll_id")->constrained("tolls")->onDelete("cascade");
            $table->foreignId("vehicle_id")->constrained("vehicles")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toll_vehicle');
    }
};
