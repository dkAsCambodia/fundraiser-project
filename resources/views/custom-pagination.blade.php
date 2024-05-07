@if ($paginator->total() > 0)
    <div class="d-xl-flex flex-wrap justify-content-between align-items-center">
        <div>
            <div class="d-flex overflow-x-auto">
                <div class="flex-shrink-0 pl-xl-8 pl-4"></div>
                <div class="d-flex py-4">
                    <button {{ $paginator->currentPage() > 1 ? '' : 'disabled' }}
                        wire:click="previousPage('page')" class="btn btn-pagination d-flex mr-3">
                        <span class="icon-slot flex-shrink-0 icon-slot-18">
                            <span class="p-abs centered font-size-18">
                                <svg svg-inline="" focusable="false" role="presentation"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon-stroke d-block">
                                    <polyline points="15 18 9 12 15 6"></polyline>
                                </svg>
                            </span>
                        </span>
                        <span class="px-2">Prev</span>
                    </button>
                    <nav class="min-w-0">
                        @php
                            $interval = isset($interval) ? abs(intval($interval)) : 3;
                            $from = $paginator->currentPage() - $interval;
                            if ($from < 1) {
                                $from = 1;
                            }

                            $to = $paginator->currentPage() + $interval;
                            if ($to > $paginator->lastPage()) {
                                $to = $paginator->lastPage();
                            }
                        @endphp
                        <ul class="pagination">

                            @for ($i = $from; $i <= $to; $i++)
                                @php
                                    $isCurrentPage = $paginator->currentPage() == $i;
                                @endphp

                                @if ($isCurrentPage)
                                    <li class="active">
                                        <span>{{ $i }}</span>
                                    </li>
                                @else
                                    <li>
                                        <a tabindex="0" wire:click="gotoPage({{ $i }}, 'page')"
                                            class="cursor-pointer focus-outline focus-outline-minus-2">
                                            {{ $i }}
                                        </a>
                                    </li>
                                @endif
                            @endfor
                        </ul>
                    </nav>
                    <button {{ $paginator->currentPage() < $paginator->lastPage() ? '' : 'disabled' }}
                        wire:click="nextPage('page')" class="btn btn-pagination d-flex ml-3">
                        <span class="px-2">Next</span>
                        <span class="icon-slot flex-shrink-0 icon-slot-18">
                            <span class="p-abs centered font-size-18">
                                <svg svg-inline="" focusable="false" role="presentation"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon-stroke d-block">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </span>
                        </span>
                    </button>
                </div>
                <div class="flex-shrink-0 pl-xl-6 pl-4"></div>
            </div>
        </div>
        <div>
            <hr class="my-0 d-xl-none" />
            <div class="p-rel px-4 px-xl-8 py-4 py-xl-7">
                <div class="p-abs top-left bottom-right d-xl-none border-bottom-radius-base bg-gray-10"></div>
                <div class="p-rel">
                    <div class="text-gray-85">
                        {{-- 346 records --}}
                        @if (isset($total) && $total)
                        @else
                            <span>
                                {{ count($paginator->items()) }} Results Showing In {{ $paginator->total() }} records
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="text-center">
        <b>Data Not Found</b>
    </div>
@endif
