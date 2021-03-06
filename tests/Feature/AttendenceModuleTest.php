<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AttendenceModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function loads_the_list_of_attendences()
    {
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('attendences.index'))
            ->assertViewIs('attendences.index')
            ->assertStatus(200)
            ->assertSee('Buscar')
            ->assertSee('Asistencia de ');
    }

    /** @test */
    function creates_an_attendence()
    {
        $this->get(route('attendences.create'))
            ->assertViewIs('attendences.create')
            ->assertStatus(200)
            ->assertSee('Continuar');
    }

    /** @test */
    function shows_an_attendence()
    {
        $membership = factory(\App\Membership::class)->create();
        $member = factory(\App\Member::class)->create();

        $this->get(route('attendences.show', ['member' => $member->id]))
            ->assertViewIs('attendences.show')
            ->assertStatus(200)
            ->assertSee('Te quedan:');
    }

    function edit_photos()
    {
        $user = factory(\App\User::class)->create();

        $this->actingAs($user)
            ->get(route('attendences.edit'))
            ->assertViewIs('attendences.edit')
            ->assertStatus(200)
            ->assertSee('Fotos en tablet');
    }

}
