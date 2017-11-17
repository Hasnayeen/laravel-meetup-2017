@extends('page.layout')

@section('content')
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-8 pb-8">
                        Questions
                    </h1>
                    <h3 class="text-grey-darker text-center font-hairline tracking-wide text-5xl mt-8 pt-8">
                        কঠিন প্রশ্ন করে বক্তাকে লজ্জা দিবেন না
                    </h3>
                    <h3 class="text-grey-darker text-right font-hairline tracking-wide text-4xl mb-8 pb-8 mt-4">
                        - কোনfucius
                    </h3>
                    @include('page.pagination')
                </div>
@endsection
