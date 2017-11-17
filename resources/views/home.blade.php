@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <div class="min-h-screen flex items-center justify-center">
            <div class="flex flex-col justify-around h-full">
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-6">
                        Laracon Bangladesh 2018
                    </h1>
                    <h3 class="text-grey-darker text-center font-hairline tracking-wide text-3xl mb-6">January 06, 2018</h3>
                    <h5 class="text-grey-darker text-center font-hairline tracking-wide text-xl">
                        First ever laravel conference in Bangladesh.
                    </h5>
                    <h5 class="text-grey-darker text-center font-hairline tracking-wide text-xl">
                        A full day of learning, growing, and mingling with the Laravel community.
                    </h5>

                    <div class="text-center pt-8">
                        <a href="schedule" class="bg-grey hover:bg-grey-dark text-white text-xl font-semibold no-underline py-2 px-4 rounded mr-3">
                            Schedule
                        </a>
                        @if (Auth::check())
                        <a href="tickets" class="bg-brand hover:bg-brand-dark text-white text-xl font-semibold no-underline py-2 px-4 rounded mr-3">
                            Purchase Ticket
                        </a>
                        @else
                        <a href="register" class="bg-brand hover:bg-brand-dark text-white text-xl font-semibold no-underline py-2 px-4 rounded mr-3">
                            Register
                        </a>
                        @endif
                    </div>
                    <img src="/images/bg.svg" style="width: 80rem;">
                </div>
            </div>
        </div>
    </div>
@endsection
