                    <div class="flex justify-center">
                        <ul class="list-reset pin-b mb-8">
                            @if ($current > 1)
                                <li class="inline pr-8">
                                    <a href="{{ $current - 1 }}" class="no-underline hover:underline text-2xl font-normal text-brand-dark uppercase" title="pagination"><</a>
                                </li>
                            @endif
                            @if ($current < count($pages))
                                <li class="inline pr-8">
                                    <a href="{{ $current + 1 }}" class="no-underline hover:underline text-2xl font-normal text-brand-dark uppercase" title="pagination">></a>
                                </li>
                            @endif
                        </ul>
                    </div>
