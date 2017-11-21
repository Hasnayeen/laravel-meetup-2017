@extends('page.layout')

@section('content')
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-8 pb-8">
                        Mocking
                    </h1>
                    <ul class="list-reset text-2xl text-blue mt-8 pt-8">
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>
        'App\Events\TicketPurchased' => [
            'App\Listeners\SendPurchaseConfirmationMail',
        ],
                                </code></pre>
                            </span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>$ php artisan event:generate</code></pre>
                            </span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>
    public function __construct(User $user)
    {
        $this->user = $user;
    }
                                </code></pre>
                            </span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>        event(new TicketPurchased($user));</code></pre>
                            </span>
                        </li>
                        <li class="pb-8 mb-8">
                            <span class="code-block">
                                <pre><code>
\Event::fake();

\Event::assertDispatched(TicketPurchased::class, function ($e) use ($user) {
    return $e->user->id === $user->id;
});
                                </code></pre>
                            </span>
                        </li>
                    @include('page.pagination')
                </div>
@endsection
