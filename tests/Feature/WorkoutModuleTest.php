<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WorkoutModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function loads_the_list_of_workouts()
    {
        $this->get(route('workouts.index'))
            ->assertViewIs('workouts.index')
            ->assertSee('WODs');
    }

    /** @test */
    function creates_a_workout()
    {
        $this->get(route('workouts.create'))
            ->assertViewIs('workouts.create')
            ->assertSee('Crear WOD');
    }

    /** @test */
    function edits_a_workout()
    {
        $workout = factory(\App\Workout::class)->create();

        $this->get(route('workouts.edit', ['workout' => $workout->id]))
            ->assertViewIs('workouts.edit')
            ->assertSee('Editar WOD');
    }
}
