@if ($paginator->hasPages())
    <div class="flex justify-center mt-12 space-x-2">
        @if ($paginator->onFirstPage())
            <button disabled class="w-10 h-10 rounded-full border border-gray-300 text-gray-400 flex items-center justify-center">
                &lt;
            </button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:border-purple-600 hover:text-purple-600">
                &lt;
            </a>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <button class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center">
                    {{ $element }}
                </button>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <button class="w-10 h-10 rounded-full bg-purple-600 text-white flex items-center justify-center">
                            {{ $page }}
                        </button>
                    @else
                        <a href="{{ $url }}" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:border-purple-600 hover:text-purple-600">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:border-purple-600 hover:text-purple-600">
                &gt;
            </a>
        @else
            <button disabled class="w-10 h-10 rounded-full border border-gray-300 text-gray-400 flex items-center justify-center">
                &gt;
            </button>
        @endif
    </div>
@endif