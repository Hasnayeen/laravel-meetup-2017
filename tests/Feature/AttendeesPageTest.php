<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AttendeesPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    public function user_who_bought_ticket_should_be_in_attendees_page()
    {
        $users = factory('App\Models\User')->create();
        $response = $this->get('attendees');
        $response->assertSee($users->name);
    }
}
