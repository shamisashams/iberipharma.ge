@if($paginator->hasPages())
    <div class="paginations flex center">
        @if ($paginator->onFirstPage())
        <button class="prev_page">@lang('client.previous')</button>
        @else
            <button onclick="location.href='{{$paginator->onFirstPage()}}'" class="prev_page">@lang('client.previous')</button>
        @endif
        <div class="num_track">
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page === $paginator->currentPage())
                            <button class="num on">{{$page}}</button>
                        @else
                            <button onclick="location.href='{{$url}}'" class="num">{{$page}}</button>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>
            @if ($paginator->hasMorePages())
                <button onclick="location.href='{{$paginator->nextPageUrl()}}'" class="next_page">@lang('client.next')</button>
            @else
            <button class="next_page">@lang('client.next')</button>
            @endif
    </div>
@endif
