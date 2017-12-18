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
        $this->get(route('sales.index'))
            ->assertViewIs('sales.index')
            ->assertStatus(200)
            ->assertSee('Lista de ventas');
    }

    /** @test */
    function creates_a_sale()
    {
        $this->get(route('sales.create'))
            ->assertViewIs('sales.create')

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
    }

    /** @test
    function shows_a_sale()
    {
        $sale = factory(\App\Sale::class)->create();

        $this->get(route('sales.show', ['sale' => $sale->id]))
            ->assertViewIs('sales.show')
            ->assertStatus(200)
            ->assertSee('Detalles venta');
    }*/
}
