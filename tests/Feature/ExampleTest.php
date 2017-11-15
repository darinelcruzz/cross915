<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /** @test */
    function loads_home_page()
    {
        $this->get('/')
            ->assertStatus(200);
    }

    /** @test */
    function loads_tests_page()
    {
        $this->get('/tests')
            ->assertStatus(200);
    }
}
