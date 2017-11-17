<?php

namespace Tests\Feature;

use App\Events\TicketPurchased;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TicketsPageTest extends TestCase
{
    use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();

        $this->user = factory('App\Models\User')->create();
    }

    /** @test  */
    public function users_should_see_purchase_form_in_tickets_page()
    {
        $response = $this->actingAs($this->user)
                         ->get('tickets');

        $response->assertSee('email')
                 ->assertSee('cc_number')
                 ->assertSee('expiration_date')
                 ->assertSee('cvv')
                 ->assertSee('type="submit"');
    }

    /** @test  */
    public function user_can_buy_ticket()
    {
        \Event::fake();
        $user = $this->user;

        $response = $this->actingAs($this->user)
                         ->post('tickets', [
                            'email'             => $this->user->email,
                            'cc_number'         => 4281732341244234,
                            'expiration_date'   => "10/20",
                            'cvv'               => "404"
                         ]);

        \Event::assertDispatched(TicketPurchased::class, function ($e) use ($user) {
            return $e->user->id === $user->id;
        });

        $response->assertRedirect('attendees');

        $redirectResponse = $this->get('attendees');
        $redirectResponse->assertSee($this->user->name);

        $this->assertDatabaseHas('users', $this->user->toArray());
    }
}
