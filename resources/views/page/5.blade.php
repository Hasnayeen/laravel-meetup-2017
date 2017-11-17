@extends('page.layout')

@section('content')
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-6">
                        Initial Setup
                    </h1>
                    <ul class="list-reset text-2xl text-blue mt-8 pt-8">
                        <li class="pb-8">
                            1. Define database config in <span class="var">phpunit.xml</span>
                        </li>
                        <li class="pb-8">
                            <span class="code-block">
                                <pre><code>
&lt;env name=&quot;DB_CONNECTION&quot; value=&quot;sqlite&quot;/&gt;
&lt;env name=&quot;DB_DATABASE&quot; value=&quot;:memory:&quot;/&gt;
                                </code></pre>
                            </span>
                        </li>
                        <li class="pb-8">
                            <span class="code-block">
                                <pre><code>php artisan migrate --database=sqlite</code></pre>
                            </span>
                        </li>
                    @include('page.pagination')
                </div>
@endsection
