<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EntriesModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function shows_a_list_with_all_entries()
    {
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('entries.index'))
            ->assertViewIs('entries.index')
            ->assertStatus(200)
            ->assertSee('Entradas de productos');
    }

    /** @test */
    function creates_an_entry()
    {
        $user = factory(\App\User::class)->create();
        $product = factory(\App\Product::class)->create();

        $this->actingAs($user)
            ->get(route('entries.create', ['product' => $product->id]))
            ->assertViewIs('entries.create')
            ->assertStatus(200)
            ->assertSee($product->description);
    }
}
