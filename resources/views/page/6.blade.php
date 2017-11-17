@extends('page.layout')

@section('content')
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-8 pb-8">
                        Writing Our First Test
                    </h1>
                    <ul class="list-reset text-2xl text-blue mt-8 pt-8">
                        <li class="pb-8">
                            1. Create a new test class <span class="var">LandingPageTest</span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>$ php artisan make:test LandingPageTest</code></pre>
                            </span>
                        </li>
                        <li class="pb-8">
                            2. Create a new test <span class="var">visitors_can_see_landing_page</span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>
    /** @test */
    public function visitors_can_see_landing_page()
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
before .... action .... after
Action happens along a arrow of time

// Given we are not logged in

// When we visit the base url a.k.a home page

// Then we should see the landing page
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
        $response = $this->get('/');
        $response->assertSee('Laracon Bangladesh 2018');
        $response->assertSee('January 06, 2018');
                                </code></pre>
                            </span>
                        </li>
                        <li class="pb-8">
                            5. Write application code to make the test pass
                        </li>
                        <li class="pb-8">
                            <span class="code-block">
                                <pre><code>
Route::get('/', 'HomeController@index')->name('home');
                                </code></pre>
                            </span>
                        </li>
                        <li class="pb-8">
                            <span class="code-block">
                                <pre><code>
&#x3C;div class=&#x22;flex flex-col&#x22;&#x3E;
    &#x3C;div class=&#x22;min-h-screen flex items-center justify-center&#x22;&#x3E;
        &#x3C;div class=&#x22;flex flex-col justify-around h-full&#x22;&#x3E;
            &#x3C;div&#x3E;
                &#x3C;h1 class=&#x22;text-grey-darker text-center font-hairline tracking-wide text-7xl mb-6&#x22;&#x3E;
                    Laracon Bangladesh 2018
                &#x3C;/h1&#x3E;
                &#x3C;h3 class=&#x22;text-grey-darker text-center font-hairline tracking-wide text-3xl mb-6&#x22;&#x3E;
                    January 06, 2018
                &#x3C;/h3&#x3E;
                &#x3C;h5 class=&#x22;text-grey-darker text-center font-hairline tracking-wide text-xl&#x22;&#x3E;
                    First ever laravel conference in Bangladesh.
                &#x3C;/h5&#x3E;
                &#x3C;h5 class=&#x22;text-grey-darker text-center font-hairline tracking-wide text-xl&#x22;&#x3E;
                    A full day of learning, growing, and mingling with the Laravel community.
                &#x3C;/h5&#x3E;

                &#x3C;img src=&#x22;/images/bg.svg&#x22; style=&#x22;width: 100rem;&#x22; &#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
                                </code></pre>
                            </span>
                        </li>
                    @include('page.pagination')
                </div>
@endsection
