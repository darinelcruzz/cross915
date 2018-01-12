<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function loads_home_page()
    {
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get('/')
            ->assertStatus(200);
    }

    /** @test */
    function loads_tests_page()
    {
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get('/tests')
            ->assertStatus(200);
    }
}
