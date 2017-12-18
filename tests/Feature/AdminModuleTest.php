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
            ->assertViewIs('admin.balance')
            ->assertStatus(200)
            ->assertSee('Buscar')
            ->assertSee('Ingresos de ');
    }

    /** @test */
    function loads_the_memberships_and_discounts_list()
    {
        $this->get(route('admin.indexMD'))
            ->assertViewIs('admin.indexMD')
            ->assertStatus(200)
            ->assertSee('Lista de membresías')
            ->assertSee('Lista de descuentos');
    }
}
