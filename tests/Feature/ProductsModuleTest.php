<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductsModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function loads_the_products_list()
    {
        $this->get(route('products.index'))
            ->assertViewIs('products.index')
            ->assertStatus(200)
            ->assertSee('Lista de productos');
    }

    /** @test */
    function creates_a_product()
    {
        $this->get(route('products.create'))
            ->assertViewIs('products.create')
            ->assertStatus(200)
            ->assertSee('Crear producto');
    }

    /** @test */
    /*function edits_a_product()
    {
        $product = factory(\App\Member::class)->create();

        $this->get(route('products.edit', ['product' => $product->id]))
            ->assertViewIs('products.edit')
            ->assertSee('Editar producto');
    }

    /** @test */
    /*function shows_a_product()
    {
        $product = factory(\App\Member::class)->create();

        $this->get(route('products.show', ['product' => $product->id]))
            ->assertViewIs('products.show')
            ->assertSee('Detalles producto');
    }*/
}
