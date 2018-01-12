<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SalesModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function loads_the_sales_list()
    {
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('sales.index'))
            ->assertViewIs('sales.index')
            ->assertStatus(200)
            ->assertSee('Lista de ventas');
    }

    /** @test */
    function creates_a_sale()
    {
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('sales.create'))
            ->assertViewIs('sales.create')
            ->assertStatus(200)
            ->assertSee('Crear venta');
    }

    /* @test
    function edits_a_sale()
    {
        $sale = factory(\App\Sale::class)->create();

        $this->get(route('sales.edit', ['sale' => $sale->id]))
            ->assertViewIs('sales.edit')
            ->assertStatus(200)
            ->assertSee('Editar venta');
    }*/

    /** @test */
    function deposit_a_sale()
    {
        $sale = factory(\App\Sale::class)->create();
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('sales.deposits', ['sale' => $sale->id]))
            ->assertViewIs('sales.payment')
            ->assertStatus(200)
            ->assertSee('Abonos');
    }
}
