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
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('schedules.index'))
            //->assertViewIs('schedules.index')
            //->assertStatus(200)
            ->assertSee('HORARIOS');
    }

    /** @test */
    function creates_a_schedule()
    {
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('schedules.create'))
            ->assertViewIs('schedules.create')
            ->assertStatus(200)
            ->assertSee('Crear horario');
    }

    /** @test */
    function edits_a_schedule()
    {
        $schedule = factory(\App\Schedule::class)->create();
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('schedules.edit', ['schedule' => $schedule->id]))
            ->assertViewIs('schedules.edit')
            ->assertStatus(200)
            ->assertSee('Editar horario');
    }
}
