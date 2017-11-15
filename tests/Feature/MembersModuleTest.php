<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MembersModuleTest extends TestCase
{
    /** @test */
    function loads_the_members_list()
    {
        $this->assertTrue(true);
    }

    /** @test */
    function creates_a_member()
    {
        $this->get(route('members.create'))
            ->assertStatus(200)
            ->assertSee('Crear usuario');
    }
}
