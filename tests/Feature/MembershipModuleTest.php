<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MembershipModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function creates_a_membership()
    {
        $this->get(route('memberships.create'))
            ->assertViewIs('memberships.create')
            ->assertStatus(200)
            ->assertSee('Crear membresía');
    }

    /** @test */
    function edits_a_membership()
    {
        $membership = factory(\App\Membership::class)->create();

        $this->get(route('memberships.edit', ['membership' => $membership->id]))
            ->assertViewIs('memberships.edit')
            ->assertStatus(200)
            ->assertSee('Editar membresía');
    }

}
