<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MembersModuleTest extends TestCase
{
    /** @test */
    function loads_the_members_list()
    {
        $this->get(route('members.index'))
            ->assertStatus(200)
            ->assertSee('Lista de usuarios');
    }

    /** @test */
    function creates_a_member()
    {
        $this->get(route('members.create'))
            ->assertStatus(200)
            ->assertSee('Crear usuario');
    }
}
