@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.location_meta_title')</title>
    <meta name="description"
          content="@lang('client.location_meta_description')">
@endsection
@section('wrapper')
    <section class="main_showcase blue_bg">
        <div class="wrapper flex">
            <div class="path">@lang('client.home') - @lang('client.locations')</div>
            <div class="page_name">@lang('client.locations')</div>
        </div>
    </section>
    <section class="contact_body locations wrapper">
        <div class="main_titles">
            <!-- <div class="s">@lang('client.locations')</div> -->
            <div class="l">@lang('client.locations_description')</div>
        </div>
        <div class="cities">
            <button class="city_picks active">@lang('client.tbilisi')</button>
            <button class="city_picks">@lang('client.rustavi')</button>
            <!-- <button class="city_picks">@lang('client.gori')</button> -->
            <button class="city_picks">@lang('client.kutaisi')</button>
            <button class="city_picks">@lang('client.zestaponi')</button>
            <button class="city_picks">@lang('client.senaki')</button>
            <button class="city_picks">@lang('client.poti')</button>
            <button class="city_picks">@lang('client.batumi')</button>
            <button class="city_picks">@lang('client.ozurgeti')</button>
            <button class="city_picks">@lang('client.gurjaani')</button>
            <button class="city_picks">@lang('client.kvareli')</button>
        </div>
        <div class="each_city_content active">
            <!-- <div class="paragraph">
                @lang('client.locations_content')
            </div> -->
            <div class="location_grid">
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_tbilisi'), </span> @lang('client.მიცკევიჩის_ქ.N10')
                        <br />
                        <span class="tel">@lang('client.571_208_397')</span>
                    </div>
                </div>
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_tbilisi'), </span> @lang('client.ნუცუბიძის_Ⅳ_მკრⅦ.კორპ.')                        <br />
                        <span class="tel">@lang('client.574_220_415')</span>
                    </div>
                </div>
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_tbilisi'), </span> @lang('client.ვაჟა-ფშაველა_73')
                        <br />
                        <span class="tel">@lang('client.568_714_909')</span>
                    </div>
                </div>
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_tbilisi'), </span> @lang('client.ტერენტი_გრანელის_1-3/ჩიტაიას_2-4')
                        <br />
                        <span class="tel">@lang('client.579_175_136')</span>
                    </div>
                </div>
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_tbilisi'), </span> @lang('client.დადიანის_ქ.Ⅱ_მკრ,კორპN2')
                        <br />
                        <span class="tel">@lang('client.574_021_911')</span>
                    </div>
                </div>
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_tbilisi'), </span> @lang('client.წინანდალისქ._N10')
                        <br />
                        <span class="tel">@lang('client.571_036_761')</span>
                    </div>
                </div>
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_tbilisi'),</span> @lang('client.ფონიჭალა_Ⅲ_კორპ_N14')
                        <br />
                        <span class="tel">@lang('client.579_044_650')</span>
                    </div>
                </div>
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_tbilisi'),</span> @lang('client.ვაზისუბანი_Ⅰ_მკრ.Ⅻ_კორპ.ტერტ.')
                        <br />
                        <span class="tel">@lang('client.571_187_879')</span>
                    </div>
                </div>
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_tbilisi'),</span> @lang('client.ვარკეთილი_Ⅲ_მასივი.კორპ.N39')
                        <br />
                        <span class="tel">@lang('client.571_209_895')</span>
                    </div>
                </div>
                <!-- <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_tbilisi'),</span> @lang('client.გლდანი,ვეკუას_23')
                        <br />
                        <span class="tel">@lang('client.579_148_609')</span>
                    </div>
                </div> -->
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_tbilisi'),</span> @lang('client.გლდანი,გმირი_კურსანტების_2ა')
                        <br />
                        <span class="tel">@lang('client.568_714_913')</span>
                    </div>
                </div>
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_tbilisi'),</span> @lang('client.თამარ_მეფის_გამზ.N29')
                        <br />
                        <span class="tel">@lang('client.032_2368745')</span>
                    </div>
                </div>
            </div>
            <div class="find_us paragraph">@lang('client.Find_us_on_a_map')</div>
            <div class="map">
                <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=124JQ5oycgKoCyG80Me7WQgDmdE66fbRo"
                        width="640"
                        height="480"
                ></iframe>
            </div>
        </div>
        <div class="each_city_content">
            <div class="paragraph">
                @lang('client.location_description')
            </div>
            <div class="location_grid">
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_rustavi'),</span> @lang('client.ქ.რუსთავი,_ⅩⅩ_მკრ,_კორპ_N6')
                        <br />
                        <span class="tel">@lang('client.597_070_859')</span>
                    </div>
                </div>
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_rustavi')</span> @lang('client.ქ.რუსთავი,მესხიშვილი_ქ.N8')
                        <br />
                        <span class="tel">@lang('client.574_188_286')</span>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=1UEnJ8CcIJgFofEyuRD840CS2NS-xwBHO"
                        width="640"
                        height="480"
                ></iframe>
            </div>
        </div>
        <!-- <div class="each_city_content">
            <div class="paragraph">
                @lang('client.location_description')
            </div>
            <div class="location_grid">
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_gori')</span> @lang('client.ქ.გორი,ცხინვალის_გზატკეცილი_17ბ')
                        <br />
                        <span class="tel">@lang('client.579_378_747')</span>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=1dDoJ0JI_ZYKwiufT2mWwkHfODbhbZ1d8"
                        width="640"
                        height="480"
                ></iframe>
            </div>
        </div> -->
        <div class="each_city_content">
            <div class="paragraph">
                @lang('client.location_description')
            </div>
            <div class="location_grid">
                <!-- <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_kutaisi')</span> @lang('client.ქ.ქუთაისი,_ჭავჭავაძის_გამზ_N52/54')
                        <br />
                        <span class="tel">@lang('client.579_030_332')</span>
                    </div>
                </div> -->
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_kutaisi')</span> @lang('client.ქ.ქუთაისი,_ჯავახიშვილის_ქ._N73')
                        <br />
                        <span class="tel">@lang('client.568_714_916')</span>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=12Kcuk5bWdbFKs5XNx8MhQIfd4usKQ0lM"
                        width="640"
                        height="480"
                ></iframe>
            </div>
        </div>
        <div class="each_city_content">
            <div class="paragraph">
                @lang('client.location_description')
            </div>
            <div class="location_grid">
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_zestafoni')</span> @lang('client.ქ.ზესტაფონი,_ჭანტურიას_ქ._N38')
                        <br />
                        <span class="tel">@lang('client.571_036_755')</span>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=1ZuGKJijUtoZdIqTt0Ueu2A9rslHeF6eh"
                        width="640"
                        height="480"
                ></iframe>
            </div>
        </div>
        <div class="each_city_content">
            <div class="paragraph">
                @lang('client.location_description')
            </div>
            <div class="location_grid">
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">{{__('client.georgia_senaki')}}</span> {{__('client.სენაკი_რუსთაველის_N170')}}
                        <br />
                        <span class="tel">{{__('client.579_373_126')}}</span>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=1p-0sneVAVPcA-x1whLqqihxmHX3kVX_o"
                        width="640"
                        height="480"
                ></iframe>
            </div>
        </div>
        <div class="each_city_content">
            <div class="paragraph">
                @lang('client.location_description')
            </div>
            <div class="location_grid">
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_poti')</span> @lang('client.ქ.ფოთი,აგრარული_ბაზრობის_ტერიტორია')
                        <br />
                        <span class="tel">@lang('client.568_090_959')</span>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=1398BIx5pdb8wQ_bK7MQrpMTtIsyFf_ZN"
                        width="640"
                        height="480"
                ></iframe>
            </div>
        </div>
        <div class="each_city_content">
            <div class="paragraph">
                @lang('client.location_description')
            </div>
            <div class="location_grid">
                <!-- <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_batumi')</span> @lang('client.ქ.ბათუმი,_ფარნავაზ_მეფის_ქ._N135')
                        <br />
                        <span class="tel">@lang('client.571_036_758')</span>
                    </div>
                </div> -->
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_batumi')</span> @lang('client.ქ.ბათუმი,_გორგილაძის_ქ.N54/62')
                        <br />
                        <span class="tel">@lang('client.571_036_757')</span>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=1O_tk0K4_RfDRXRaOOlR2svWgmB3LTti2"
                        width="640"
                        height="480"
                ></iframe>
            </div>
        </div>
        <div class="each_city_content">
            <div class="paragraph">
                @lang('client.location_description')
            </div>
            <div class="location_grid">
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_ozurgeti')</span> @lang('client.ქ.ოზურგეთი,წულაძის_ქ.N10')
                        <br />
                        <span class="tel">@lang('client.579_048_907')</span>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=17hwTG3d6LNUu2EaMtwxHdG8ZqjkEEqQY"
                        width="640"
                        height="480"
                ></iframe>
            </div>
        </div>
        <div class="each_city_content">
            <div class="paragraph">
                @lang('client.location_description')
            </div>
            <div class="location_grid">
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_gurjaani')</span> @lang('client.გურჯაანი_წმინდა_ნინოს_ქ_N1')
                        <br />
                        <span class="tel">@lang('client.599_589_833')</span>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe
                        src="https://www.google.com/maps/d/u/0/embed?mid=1Css3QJKuLhNWt95PGOmwpqxS_bZwZlzw"
                        width="640"
                        height="480"
                ></iframe>
            </div>
        </div>
        <div class="each_city_content">
            <div class="paragraph">
                @lang('client.location_description')
            </div>
            <div class="location_grid">
                <div class="flex">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="21"
                            height="20"
                            viewBox="0 0 21 20"
                    >
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 -0.5)">
                            <g id="pin">
                                <rect
                                        id="Rectangle_196"
                                        data-name="Rectangle 196"
                                        width="21"
                                        height="20"
                                        transform="translate(0 0.5)"
                                        fill="#f9a11c"
                                        opacity="0"
                                />
                                <path
                                        id="Path_20"
                                        data-name="Path 20"
                                        d="M10.833,2A6.833,6.833,0,0,0,4,8.765c0,4.68,6.022,9.891,6.278,10.113a.854.854,0,0,0,1.11,0c.3-.222,6.278-5.433,6.278-10.113A6.833,6.833,0,0,0,10.833,2Zm0,15.076c-1.426-1.358-5.125-5.125-5.125-8.311a5.125,5.125,0,1,1,10.25,0C15.958,11.925,12.26,15.718,10.833,17.076Z"
                                        transform="translate(-0.583 -0.292)"
                                        fill="#f9a11c"
                                />
                                <path
                                        id="Path_21"
                                        data-name="Path 21"
                                        d="M11.49,6a2.99,2.99,0,1,0,2.99,2.99A2.99,2.99,0,0,0,11.49,6Zm0,4.271A1.281,1.281,0,1,1,12.771,8.99,1.281,1.281,0,0,1,11.49,10.271Z"
                                        transform="translate(-1.24 -0.875)"
                                        fill="#f9a11c"
                                />
                            </g>
                        </g>
                    </svg>
                    <div>
                        <span class="medium">@lang('client.georgia_kvareli')</span> @lang('client.სოფ-შილდა')
                        <br />
                        <span class="tel">@lang('client.555_30_20_97')</span>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe
                        src="https://maps.google.com/maps?q=%E1%83%A8%E1%83%98%E1%83%9A%E1%83%93%E1%83%90&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        width="640"
                        height="480"
                ></iframe>
            </div>
        </div>
    </section>

@endsection