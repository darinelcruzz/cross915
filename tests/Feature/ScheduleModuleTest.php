<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ScheduleModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function loads_the_complete_schedule()
    {
        $this->get(route('schedules.index'))
            //->assertViewIs('schedules.index')
            ->assertSee('HORARIOS');
    }

    /** @test */
    function creates_a_schedule()
    {
        $this->get(route('schedules.create'))
            ->assertViewIs('schedules.create')
            ->assertSee('Crear horario');
    }

    /** @test */
    function edits_a_schedule()
    {
        $schedule = factory(\App\Schedule::class)->create();

        $this->get(route('schedules.edit', ['schedule' => $schedule->id]))
            ->assertViewIs('schedules.edit')
            ->assertSee('Editar horario');
    }
}
