@extends('page.layout')

@section('content')
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-8 pb-8">
                        ...Continue
                    </h1>
                    <ul class="list-reset text-2xl text-blue mt-8 pt-8">
                        <li class="pb-8">
                            1. Create a new test <span class="var">logged_in_users_can_see_purchase_ticket_button</span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>
    /** @test */
    public function logged_in_user_can_see_purchase_ticket_button()
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

// When we visit the base url a.k.a home page

// Then we should see the purchase ticket button
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
                         ->get('/');
        $response->assertSee('Purchase Ticket');
                                </code></pre>
                            </span>
                        </li>
                        <li class="pb-8">
                            4. Write application code to make the test pass
                        </li>
                        <li class="pb-8">
                            <span class="code-block">
                                <pre><code>@verbatim
@if (Auth::check())
&#x3C;a href=&#x22;tickets&#x22; class=&#x22;bg-brand hover:bg-brand-dark text-white text-xl font-semibold no-underline py-2 px-4 rounded mr-3&#x22;&#x3E;
    Purchase Ticket
&#x3C;/a&#x3E;
@else
&#x3C;a href=&#x22;register&#x22; class=&#x22;bg-brand hover:bg-brand-dark text-white text-xl font-semibold no-underline py-2 px-4 rounded mr-3&#x22;&#x3E;
    Register
&#x3C;/a&#x3E;
@endif
@endverbatim                                </code></pre>
                            </span>
                        </li>
                    @include('page.pagination')
                </div>
@endsection
