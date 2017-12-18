<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function loads_cash_view()
    {
        $this->get(route('admin.cash'))
            ->assertViewIs('cash.balance')
            ->assertStatus(200)
            ->assertSee('Buscar');
    }
}
