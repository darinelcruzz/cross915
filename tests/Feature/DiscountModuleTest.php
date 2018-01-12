<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DiscountModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function creates_a_discount()
    {
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('discounts.create'))
            ->assertViewIs('discounts.create')
            ->assertStatus(200)
            ->assertSee('Crear descuento');
    }

    /** @test */
    function edits_a_discount()
    {
        $discount = factory(\App\Discount::class)->create();
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('discounts.edit', ['discount' => $discount->id]))
            ->assertViewIs('discounts.edit')
            ->assertStatus(200)
            ->assertSee('Editar descuento');
    }

}
