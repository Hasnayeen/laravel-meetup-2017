@extends('page.layout')

@section('content')
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-6">
                        TDD Rules
                    </h1>
                    <ul class="list-reset text-2xl text-blue mt-8 pt-8">
                        <li class="pb-8">
                            1. You do not write any code unless it is to make a failing unit test pass
                        </li>
                        <li class="pb-8">
                            2. You do not write more of a unit test than is sufficient to fail
                        </li>
                        <li class="pb-8">
                            3. You do not write more code than to make the failing unit test pass
                        </li>
                    @include('page.pagination')
                </div>
@endsection
