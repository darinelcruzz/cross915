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
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('products.index'))
            ->assertViewIs('products.index')
            ->assertStatus(200)
            ->assertSee('Lista de productos');
    }

    /** @test */
    function creates_a_product()
    {
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('products.create'))
            ->assertViewIs('products.create')
            ->assertStatus(200)
            ->assertSee('Crear producto');
    }

    /** @test */
    function edits_a_product()
    {
        $product = factory(\App\Product::class)->create();
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('products.edit', ['product' => $product->id]))
            ->assertViewIs('products.edit')
            ->assertStatus(200)
            ->assertSee('Editar producto');
    }
}
