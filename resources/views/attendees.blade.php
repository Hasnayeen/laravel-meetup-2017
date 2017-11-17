@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <div class="min-h-screen flex items-start justify-center">
            <div class="flex flex-col justify-around h-full">
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-6">
                        Attendees
                    </h1>

                    <div class="text-center pt-8">
                        <ul class="list-reset text-2xl text-blue mt-8 pt-8">
                            @foreach($users as $user)
                            <li class="p-4 bg-white my-4 shadow rounded">
                                <h4>
                                    <a href="#" class="no-underline text-blue-light">
                                        {{ $user->name }}
                                    </a>
                                </h4>
                                <span class="text-grey text-base pr-4">{{ $user->email }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
