<header class="header">
    <div class="header_content wrapper flex">
        <a href="{{locale_route('home.index')}}" class="logo">
            <img src="/client/img/logo/1.png" alt=""/>
        </a>
        <div class="navbar flex center">
            <a href="{{locale_route('home.index')}}"
               class="nav_link transition {{Request::route()->getName()  === 'home.index'? 'on' : ''}}">@lang('client.home')</a>
            <div class="nav_link transition {{(Request::route()->getName()  === 'home.mission'
                            || Request::route()->getName()  === 'home.company'
                            || Request::route()->getName()  === 'home.vision'
                            || Request::route()->getName()  === 'home.value'
                            )? 'on' : ''}}
                    ||
"

            >
                @lang('client.about_us')
                <svg
                        class="transition"
                        xmlns="http://www.w3.org/2000/svg"
                        width="6.335"
                        height="12.673"
                        viewBox="0 0 6.335 12.673"
                >
                    <path
                            id="Path_12"
                            data-name="Path 12"
                            d="M9.044,17.671a.905.905,0,0,0,.706-.335l4.372-5.431a.905.905,0,0,0,0-1.149L9.6,5.326A.906.906,0,0,0,8.2,6.484l4.046,4.851-3.91,4.851a.905.905,0,0,0,.706,1.484Z"
                            transform="translate(-7.993 -4.999)"
                    />
                </svg>
                <div class="dropdown transition">
                    <a href="{{locale_route('home.mission')}}">@lang('client.mission')</a>
                    <a href="{{locale_route('home.vision')}}">@lang('client.vision')</a>
{{--                    <a href="{{locale_route('home.company')}}">@lang('client.company_history')</a>--}}
                    <a href="{{locale_route('home.value')}}">@lang('client.values')</a>
                </div>
            </div>
            <a href="{{locale_route('client.product.index')}}"
               class="nav_link transition {{(Request::route()->getName()  === 'client.product.index' || Request::route()->getName()  === 'client.product.show')? 'on' : ''}}">@lang('client.products')</a>
            <a href="{{locale_route('client.wellness.index')}}"
               class="nav_link transition {{(Request::route()->getName()  === 'client.wellness.index' || Request::route()->getName()  === 'client.wellness.show')? 'on' : ''}}">@lang('client.wellness')</a>

            {{--            <div class="nav_link transition {{(Request::route()->getName()  === 'news.index'--}}
{{--                            || Request::route()->getName()  === 'client.wellness.index'--}}
{{--                            || Request::route()->getName()  === 'client.wellness.show'--}}
{{--                            || Request::route()->getName()  === 'client.news.show'--}}
{{--                            )? 'on' : ''}}--}}
{{--                            ||--}}
{{--                    "--}}
{{--            >--}}
{{--                @lang('client.blog')--}}
{{--                <svg--}}
{{--                        class="transition"--}}
{{--                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                        width="6.335"--}}
{{--                        height="12.673"--}}
{{--                        viewBox="0 0 6.335 12.673"--}}
{{--                >--}}
{{--                    <path--}}
{{--                            id="Path_12"--}}
{{--                            data-name="Path 12"--}}
{{--                            d="M9.044,17.671a.905.905,0,0,0,.706-.335l4.372-5.431a.905.905,0,0,0,0-1.149L9.6,5.326A.906.906,0,0,0,8.2,6.484l4.046,4.851-3.91,4.851a.905.905,0,0,0,.706,1.484Z"--}}
{{--                            transform="translate(-7.993 -4.999)"--}}
{{--                    />--}}
{{--                </svg>--}}
{{--                <div class="dropdown transition">--}}
{{--                    <a href="{{locale_route('news.index')}}">@lang('client.news')</a>--}}
{{--                </div>--}}
{{--            </div>--}}
            <a href="{{locale_route('home.location')}}" class="nav_link transition {{Request::route()->getName()  === 'home.location'? 'on' : ''}}">@lang('client.locations')</a>
            <a href="{{locale_route('contact.index')}}" class="nav_link transition {{Request::route()->getName()  === 'contact.index'? 'on' : ''}}">@lang('client.contact_us')</a>
        </div>
        <div class="languages nav_link transition dark_text4">

                {{$localizations['current']['title']}}
            <svg
                    class="transition"
                    id="globe"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
            >
                <rect
                        id="Rectangle_14"
                        data-name="Rectangle 14"
                        width="24"
                        height="24"
                        transform="translate(24 24) rotate(180)"
                        opacity="0"
                />
                <path
                        id="Path_10"
                        data-name="Path 10"
                        d="M22,12A10,10,0,1,0,12,22,10,10,0,0,0,22,12Zm-2.07-1H17a12.91,12.91,0,0,0-2.33-6.54A8,8,0,0,1,19.93,11ZM9.08,13H15a11.44,11.44,0,0,1-3,6.61A11,11,0,0,1,9.08,13Zm0-2A11.4,11.4,0,0,1,12,4.4,11.19,11.19,0,0,1,15,11Zm.36-6.57A13.18,13.18,0,0,0,7.07,11h-3A8,8,0,0,1,9.44,4.43ZM4.07,13h3a12.86,12.86,0,0,0,2.35,6.56A8,8,0,0,1,4.07,13Zm10.55,6.55A13.14,13.14,0,0,0,17,13h2.95A8,8,0,0,1,14.62,19.55Z"
                />
            </svg>

        @if(isset($localizations['data']))
                <div class="dropdown transition">
                    @foreach($localizations['data'] as $language)
                        <a href="{{$language['url']}}">
                            {{$language['title']}}
                        </a>

                    @endforeach
                </div>
            @endif
        </div>
        <div class="mobile_menu_btn"></div>
    </div>
</header>
