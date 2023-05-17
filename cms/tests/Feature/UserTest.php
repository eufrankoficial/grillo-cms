<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testListOfUsers(): void
    {
        $users = User::factory()->create();
        $this->actingAs($users);

        $response = $this->get('/api/users');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data'
        ]);
    }

    public function test302StatusListOfUsers(): void
    {
        $response = $this->get("/api/users");

        $response->assertStatus(302);
    }
}
