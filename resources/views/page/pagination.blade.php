                    <div class="flex justify-center">
                        <ul class="list-reset absolute pin-b mb-8">
                            @if ($current > 1)
                                <li class="inline pr-8">
                                    <a href="{{ $current - 1 }}" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="Documentation"><</a>
                                </li>
                            @endif
                            @foreach ($pages as $page)
                                <li class="inline pr-8">
                                    <a href="{{ $page->serial }}" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="Documentation">{{ $page->serial }}</a>
                                </li>
                            @endforeach
                            @if ($current < $pages->total())
                                <li class="inline pr-8">
                                    <a href="{{ $current - 1 }}" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="Documentation">></a>
                                </li>
                            @endif
                        </ul>
                    </div>
