@extends('page.layout')

@section('content')
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-8 pb-8">
                        ...Continue
                    </h1>
                    <ul class="list-reset text-2xl text-blue mt-8 pt-8">
                        <li class="pb-8">
                            1. Create a new test <span class="var">user_can_buy_ticket</span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>
    /** @test */
    public function user_can_buy_ticket()
    {

    }
                                </code></pre>
                            </span>
                        </li>
                        <li class="pb-8">
                            2. So what are we trying to do
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre>
                                    <code>
// Given we are logged in

// And  we are in tickets page

// When we fill up purchase form

// And buy ticket

// Then we should be redirected to attendees page

// And should see our name
</code>
                                </pre>
                            </span>
                        </li>
                        <li class="pb-8">
                            3. Write code in test method to make the test fail
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>
        $user = factory('App\Models\User')->create();

        $response = $this->actingAs($user)
                         ->post('tickets', [
                            'email'             => $user->email,
                            'cc_number'         => 4281732341244234,
                            'expiration_date'   => "10/20",
                            'cvv'               => "404"
                         ]);

        $response->assertRedirect('attendees');

        $redirectResponse = $this->get('attendees');
        $redirectResponse->assertSee($user->name);

        $this->assertDatabaseHas('users', $user->toArray());
                                </code></pre>
                            </span>
                        </li>
                        <li class="pb-8">
                            4. Write application code to make the test pass
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>Route::post('tickets', 'TicketsController@store')->name('purchase')->middleware('auth');</code></pre>
                            </span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>
    public function store(Request $request)
    {
        $user = User::find(\Auth::user()->id);
        $user->update(['ticket_bought' => \Carbon\Carbon::now()]);

        return redirect('/attendees');
    }
                                </code></pre>
                            </span>
                        </li>
                    @include('page.pagination')
                </div>
@endsection
