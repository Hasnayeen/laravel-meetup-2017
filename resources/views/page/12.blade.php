@extends('page.layout')

@section('content')
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-8 pb-8">
                        ...Continue
                    </h1>
                    <ul class="list-reset text-2xl text-blue mt-8 pt-8">
                        <li class="pb-8">
                            1. Create a new test class <span class="var">AttendeesPageTest</span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>$ php artisan make:test AttendeesPageTest</code></pre>
                            </span>
                        </li>
                        <li class="pb-8">
                            2. Create a new test <span class="var">user_who_bought_ticket_should_be_in_attendees_page</span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>
    use RefreshDatabase;

    /** @test */
    public function user_who_bought_ticket_should_be_in_attendees_page()
    {

    }
                                </code></pre>
                            </span>
                        </li>
                        <li class="pb-8">
                            3. So what are we trying to do
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre>
                                    <code>
// Given we bought tickets

// When we visits attendees page

// Then we should see our name
</code>
                                </pre>
                            </span>
                        </li>
                        <li class="pb-8">
                            4. Write code in test method to make the test fail
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>
        $users = factory('App\Models\User')->create();
        $response = $this->get('attendees');
        $response->assertSee($users->name);
                                </code></pre>
                            </span>
                        </li>
                        <li class="pb-8">
                            5. Write application code to make the test pass
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>Route::get('attendees', 'AttendeesController@index');</code></pre>
                            </span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>$ php artisan make:controller AttendeesController</code></pre>
                            </span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>
    public function index()
    {
        $users = User::whoBoughtTicket()->get(); // wishful thinking

        return view('attendees', compact("users"));
    }
                                </code></pre>
                            </span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>@verbatim
&#x3C;div&#x3E;
    &#x3C;h1 class=&#x22;text-grey-darker text-center font-hairline tracking-wide text-7xl mb-6&#x22;&#x3E;
        Attendees
    &#x3C;/h1&#x3E;

    &#x3C;div class=&#x22;text-center pt-8&#x22;&#x3E;
        &#x3C;ul class=&#x22;list-reset text-2xl text-blue mt-8 pt-8&#x22;&#x3E;
            @foreach($users as $user)
            &#x3C;li class=&#x22;p-4 bg-white my-4 shadow rounded&#x22;&#x3E;
                &#x3C;h4&#x3E;
                    &#x3C;a href=&#x22;#&#x22; class=&#x22;no-underline text-blue-light&#x22;&#x3E;
                        {{ $user-&#x3E;name }}
                    &#x3C;/a&#x3E;
                &#x3C;/h4&#x3E;
                &#x3C;span class=&#x22;text-grey text-base pr-4&#x22;&#x3E;{{ $user-&#x3E;email }}&#x3C;/span&#x3E;
            &#x3C;/li&#x3E;
            @endforeach
        &#x3C;/ul&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
                                @endverbatim</code></pre>
                            </span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>
$table->dateTime('ticket_bought')->nullable(); // timestamp instead of boolean
                                </code></pre>
                            </span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>        'ticket_bought' => \Carbon\Carbon::now(),</code></pre>
                            </span>
                        </li>
                    @include('page.pagination')
                </div>
@endsection
