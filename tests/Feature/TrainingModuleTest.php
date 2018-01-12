<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TrainingModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function loads_the_trainings_list()
    {
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('trainings.index'))
            ->assertViewIs('trainings.index')
            ->assertStatus(200)
            ->assertSee('Clases');
    }

    /** @test */
    function creates_a_training()
    {
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('trainings.create'))
            ->assertViewIs('trainings.create')
            ->assertStatus(200)
            ->assertSee('Crear clase');
    }

    /** @test */
    function edits_a_training()
    {
        $training = \App\Training::create([
            'coach_id' => 1,
            'workout_id' => 1,
            'color' => 'danger'
        ]);
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('trainings.edit', ['training' => $training->id]))
            ->assertViewIs('trainings.edit')
            ->assertStatus(200)
            ->assertSee('Editar clase');
    }
}
