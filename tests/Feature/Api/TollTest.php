<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TollTest extends TestCase
{
    use RefreshDatabase;

    public function test_store(): void
    {
        $response = $this->post('/api/tolls', [
            "name" => "test",
            "city" => "test"
        ]);

        $response->assertStatus(200)
                ->assertJsonFragment([
                    "name" => "test",
                    "city" => "test"
                ]);
    }
}
