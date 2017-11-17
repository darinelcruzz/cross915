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
            ->assertStatus(200)
            ->assertSee('Clases');
    }

    /** @test */
    function creates_a_training()
    {
        $this->get(route('trainings.create'))
            ->assertViewIs('trainings.create')
            ->assertStatus(200)
            ->assertSee('Crear clase');
    }
}
