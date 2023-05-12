<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NotAuthenticatedTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_not_auth_user(): void
    {
        $users = User::factory()->create();
        
        $response = $this->post('/login', [
            'email' => $users->email,
            'password' => '123',
        ]);

        $response->assertStatus(302);
    }
}
