<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ScheduleModuleTest extends TestCase
{
    /** @test */
    function loads_the_complete_schedule()
    {
        $this->get(route('schedules.index'))
            ->assertViewIs('schedules.index')
            ->assertStatus(200)
            ->assertSee('HORARIOS');
    }

    /** @test */
    function creates_a_schedule()
    {
        $this->get(route('schedules.create'))
            ->assertViewIs('schedules.create')
            ->assertStatus(200)
            ->assertSee('Crear horario');
    }

    /** @test */
    function edits_a_schedule()
    {
        $this->get(route('schedules.edit', ['schedule' => '1']))
            ->assertViewIs('schedules.edit')
            ->assertStatus(200)
            ->assertSee('Editar horario');
    }
}
