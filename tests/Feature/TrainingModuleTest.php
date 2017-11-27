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
        $this->get(route('trainings.index'))
            ->assertViewIs('trainings.index')
            ->assertSee('Clases');
    }

    /** @test */
    function creates_a_training()
    {
        $this->get(route('trainings.create'))
            ->assertViewIs('trainings.create')
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

        $this->get(route('trainings.edit', ['training' => $training->id]))
            ->assertViewIs('trainings.edit')
            ->assertSee('Editar clase');
    }
}
