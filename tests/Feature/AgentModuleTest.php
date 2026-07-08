<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AgentModuleTest extends TestCase
{
    public function test_agents_page()
    {
        $this->withoutExceptionHandling();
        $user = \App\Models\User::first();
        $response = $this->actingAs($user)->get('/view_property?view_id=1161');

        echo "Content: " . $response->getContent() . "\n";
    }
}
