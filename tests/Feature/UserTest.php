<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserTest extends TestCase
{

    public function setUp() :void
    {
        parent::setUp();

        User::factory(1)->create();
    }

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     */
    public function test_if_user_created_in_database(): void
    {
        $response = $this->post('/create/user');

        $response = DB::table('users')->first();

        dd($response);
    }
}
