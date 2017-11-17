<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LandingPageTest extends TestCase
{
    /** @test */
    public function visitors_can_see_landing_page()
    {
        $response = $this->get('/');
        $response->assertSee('Laracon Bangladesh 2018');
        $response->assertSee('January 06, 2018');
    }

    /** @test  */
    public function visitors_will_see_schedule_button()
    {
        $response = $this->get('/');
        $response->assertSee('Schedule');
    }

    /** @test */
    public function visitors_will_see_register_button()
    {
        $response = $this->get('/');
        $response->assertSee('Register');
    }

    /** @test  */
    public function logged_in_user_will_see_purchase_ticket_button()
    {
        $user = factory('App\Models\User')->create();
        $response = $this->actingAs($user)
                         ->get('/');
        $response->assertSee('Purchase Ticket');
    }
}
