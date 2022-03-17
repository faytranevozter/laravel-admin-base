@if ($paginator->hasPages())
<div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
    <span class="flex items-center col-span-3">
        {!! __('Showing') !!}&nbsp;
        @if ($paginator->firstItem())
        <span class="font-medium">{{ $paginator->firstItem() }}</span>
        {!! __('-') !!}
        <span class="font-medium">{{ $paginator->lastItem() }}</span>
        @else
        {{ $paginator->count() }}
        @endif
        &nbsp;{!! __('of') !!}
        {{ $paginator->total() }}
    </span>
    <span class="col-span-2"></span>
    <!-- Pagination -->
    <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
        <nav aria-label="Table navigation">
            <ul class="inline-flex items-center">
                @if ($paginator->onFirstPage())
                <li>
                    <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-primary text-gray-400" aria-label="@lang('pagination.previous')" disabled>
                        <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </li>
                @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="block px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-primary hover:text-gray-600 dark:hover:text-gray-300" rel="prev" aria-label="@lang('pagination.previous')">
                        <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                @endif
                
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                    <li> <span class="px-3 py-1">...</span> </li>
                    @endif
                    
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                            <li>
                                <button class="px-3 py-1 text-white transition-colors duration-150 bg-primary-600 border border-r-0 border-primary-600 rounded-md focus:outline-none focus:shadow-outline-primary">
                                    {{ $page }}
                                </button>
                            </li>
                            @else
                            <li>
                                <a href="{{ $url }}" class="block px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-primary hover:text-gray-600 dark:hover:text-gray-300">
                                    {{ $page }}
                                </a>
                            </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="block px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-primary hover:text-gray-600 dark:hover:text-gray-300" rel="next" aria-label="@lang('pagination.next')">
                        <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                            <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                @else
                <li>
                    <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-primary text-gray-400" aria-label="@lang('pagination.next')" disabled>
                        <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                            <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </li>
                @endif
            </ul>
        </nav>
    </span>
</div>
@endif
