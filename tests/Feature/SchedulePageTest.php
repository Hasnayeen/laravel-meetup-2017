<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SchedulePageTest extends TestCase
{
    use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();

        $this->sessions = factory('App\Models\Session', 5)->create();
    }

    /** @test */
    public function visitors_can_see_all_sessions_title()
    {
        $response = $this->get('schedule');
        $response->assertStatus(200);
        $response->assertSee($this->sessions->first()->title);
    }

    /** @test  */
    public function visitors_can_not_see_session_speaker_name()
    {
        $response = $this->get('schedule');
        $response->assertDontSee($this->sessions->first()->speaker);
    }
}
