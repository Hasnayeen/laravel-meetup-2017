@extends('page.layout')

@section('content')
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-8 pb-8">
                        ...Continue
                    </h1>
                    <ul class="list-reset text-2xl text-blue mt-8 pt-8">
                        <li class="pb-8">
                            1. Create a new test class <span class="var">TicketsPageTest</span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>$ php artisan make:test TicketsPageTest</code></pre>
                            </span>
                        </li>
                        <li class="pb-8">
                            2. Create a new test <span class="var">users_should_see_purchase_form_in_tickets_page</span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>
    use RefreshDatabase;

    /** @test */
    public function users_should_see_purchase_form_in_tickets_page()
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
// Given we are logged in

// When we visits tickets page

// Then we should see ticket purchase form
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
        $response = $this->actingAs($this->user)
                         ->get('tickets');

        $response->assertSee('email')
                 ->assertSee('cc_number')
                 ->assertSee('expiration_date')
                 ->assertSee('cvv')
                 ->assertSee('type="submit"');
                                </code></pre>
                            </span>
                        </li>
                        <li class="pb-8">
                            5. Write application code to make the test pass
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>Route::get('tickets', 'TicketsController@show')->middleware('auth');</code></pre>
                            </span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>$ php artisan make:controller TicketsController</code></pre>
                            </span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>
    public function show()
    {
        return view('tickets');
    }
                                </code></pre>
                            </span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>@verbatim
&#x3C;h1 class=&#x22;text-grey-darker text-center font-hairline tracking-wide text-7xl mb-6&#x22;&#x3E;
    Tickets
&#x3C;/h1&#x3E;

&#x3C;div class=&#x22;w-full max-w-xs&#x22;&#x3E;
  &#x3C;form class=&#x22;bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4&#x22; method=&#x22;POST&#x22; action=&#x22;{{ route(&#x27;purchase&#x27;) }}&#x22;&#x3E;
    {{ csrf_field() }}

    &#x3C;div class=&#x22;mb-4&#x22;&#x3E;
      &#x3C;label class=&#x22;block text-grey-darker text-sm font-bold mb-2&#x22; for=&#x22;email&#x22;&#x3E;
        Email
      &#x3C;/label&#x3E;
      &#x3C;input class=&#x22;shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker&#x22; id=&#x22;email&#x22;
      type=&#x22;text&#x22; placeholder=&#x22;john@example.com&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;mb-4&#x22;&#x3E;
      &#x3C;label class=&#x22;block text-grey-darker text-sm font-bold mb-2&#x22; for=&#x22;cc_number&#x22;&#x3E;
        Credit Card Number
      &#x3C;/label&#x3E;
      &#x3C;input class=&#x22;shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker&#x22; id=&#x22;cc_number&#x22;
      type=&#x22;text&#x22; placeholder=&#x22;6231-4506-2398-4582&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;mb-4&#x22;&#x3E;
      &#x3C;label class=&#x22;block text-grey-darker text-sm font-bold mb-2&#x22; for=&#x22;expiration_date&#x22;&#x3E;
        Expiration Date
      &#x3C;/label&#x3E;
      &#x3C;input class=&#x22;shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker&#x22; id=&#x22;expiration_date&#x22;
      type=&#x22;text&#x22; placeholder=&#x22;10/18&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;mb-6&#x22;&#x3E;
      &#x3C;label class=&#x22;block text-grey-darker text-sm font-bold mb-2&#x22; for=&#x22;cvv&#x22;&#x3E;
        CVV Number
      &#x3C;/label&#x3E;
      &#x3C;input class=&#x22;shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker mb-3&#x22; id=&#x22;cvv&#x22;
      type=&#x22;password&#x22; placeholder=&#x22;***&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;flex items-right justify-end&#x22;&#x3E;
      &#x3C;button class=&#x22;bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded&#x22; type=&#x22;submit&#x22;&#x3E;
        Buy
      &#x3C;/button&#x3E;
    &#x3C;/div&#x3E;
  &#x3C;/form&#x3E;
&#x3C;/div&#x3E;
                                @endverbatim</code></pre>
                            </span>
                        </li>
                    @include('page.pagination')
                </div>
@endsection
