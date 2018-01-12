<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PaymentsModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function loads_the_payments_list()
    {
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('payments.index'))
            ->assertViewIs('payments.index')
            ->assertStatus(200)
            ->assertSee('Lista de pagos');
    }

    /** @test */
    function creates_a_payment()
    {
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('payments.create'))
            ->assertViewIs('payments.create')
            ->assertStatus(200)
            ->assertSee('Crear pago');
    }
}
