<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MembersModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function loads_the_members_list()
    {
        $this->get(route('members.index'))
            ->assertViewIs('members.index')
            ->assertStatus(200)
            ->assertSee('Lista de miembros');
    }

    /** @test */
    function creates_a_member()
    {
        $this->get(route('members.create'))
            ->assertViewIs('members.create')
            ->assertStatus(200)
            ->assertSee('Crear miembro');
    }

    /** @test */
    function edits_a_member ()
    {
        $member = factory(\App\Member::class)->create();

        $this->get(route('members.edit', ['member' => $member->id]))
            ->assertViewIs('members.edit')
            ->assertStatus(200)
            ->assertSee('Editar miembro');
    }

    /** @test */
    function shows_a_member()
    {
        //$membership = factory(\App\Membership::class)->create();
        $member = factory(\App\Member::class)->create();

        $this->get(route('members.show', ['member' => $member->id]))
            //->assertViewIs('members.show')
            //->assertStatus(200)
            ->assertSee('Detalles miembro')
            //->assertSee($member->name)
            ->assertSee('Asistencias');
    }
}
