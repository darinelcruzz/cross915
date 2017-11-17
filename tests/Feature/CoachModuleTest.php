<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CoachModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function loads_the_list_of_coaches()
    {
        $this->get(route('coaches.index'))
            ->assertViewIs('coaches.index')
            ->assertStatus(200)
            ->assertSee('Entrenadores');
    }

    /** @test */
    function creates_a_coach()
    {
        $this->get(route('coaches.create'))
            ->assertViewIs('coaches.create')
            ->assertStatus(200)
            ->assertSee('Crear entrenador');
    }

    /** @test */
    function edits_a_coach()
    {
        $coach = factory(\App\Coach::class)->create();

        $this->get(route('coaches.edit', ['coach' => $coach->id]))
            ->assertViewIs('coaches.edit')
            ->assertStatus(200)
            ->assertSee('Editar entrenador');
    }
}
