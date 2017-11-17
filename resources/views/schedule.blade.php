@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <div class="min-h-screen flex items-start justify-center">
            <div class="flex flex-col justify-around h-full">
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-6">
                        Schedule
                    </h1>

                    <div class="text-left pt-8">
                        <ul class="list-reset text-2xl text-blue mt-8 pt-8">
                            @foreach($sessions as $session)
                            <li class="p-4 bg-white my-4 shadow rounded">
                                <span class="text-grey pr-4">{{ $session->time }}</span>
                                <span class="text-grey pr-4">{{ $session->title }}</span>
                                @if (Auth::check())
                                <h4>
                                    <span class="text-grey pr-4 invisible">{{ $session->time }}</span>
                                    <a href="#" class="text-right no-underline text-blue-light text-base">
                                        {{ $session->speaker }}
                                    </a>
                                </h4>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
