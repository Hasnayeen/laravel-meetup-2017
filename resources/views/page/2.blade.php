@extends('page.layout')

@section('content')
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-6">
                        TDD Workflow
                    </h1>
                    <ul class="list-reset text-2xl text-blue mt-8 pt-8">
                        <li class="pb-8">
                            1. First write the test
                        </li>
                        <li class="pb-8">
                            2. Run and make test fail
                        </li>
                        <li class="pb-8">
                            3. Write minimum code to make the test pass
                        </li>
                        <li class="pb-8">
                            4. Refactor
                        </li>
                        <li class="pb-8">
                            5. Repeat
                        </li>
                    @include('page.pagination')
                </div>
@endsection
