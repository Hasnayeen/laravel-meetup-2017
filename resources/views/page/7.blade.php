@extends('page.layout')

@section('content')
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-8 pb-8">
                        Write our next test
                    </h1>
                    <ul class="list-reset text-2xl text-blue mt-8 pt-8">
                        <li class="pb-8">
                            1. Create a new test <span class="var">visitors_can_see_schedule_button</span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>
    /** @test */
    public function visitors_can_see_schedule_button()
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
// Given we are not logged in

// When we visit the base url a.k.a home page

// Then we should see the schedule button
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
        $response = $this->get('/');
        $response->assertSee('Schedule');
                                </code></pre>
                            </span>
                        </li>
                        <li class="pb-8">
                            4. Write application code to make the test pass
                        </li>
                        <li class="pb-8">
                            <span class="code-block">
                                <pre><code>
&#x3C;div class=&#x22;text-center pt-8&#x22;&#x3E;
    &#x3C;a href=&#x22;schedule&#x22; class=&#x22;bg-grey hover:bg-grey-dark text-white text-xl font-semibold no-underline py-2 px-4 rounded mr-3&#x22;&#x3E;
        Schedule
    &#x3C;/a&#x3E;
&#x3C;/div&#x3E;
&#x3C;img src=&#x22;/images/bg.svg&#x22; style=&#x22;width: 80rem;&#x22;&#x3E;
                                </code></pre>
                            </span>
                        </li>
                    @include('page.pagination')
                </div>
@endsection
