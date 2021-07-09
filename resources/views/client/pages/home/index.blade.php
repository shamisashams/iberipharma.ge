@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.home_meta_title')</title>
    <meta name="description"
          content="@lang('client.home_meta_description')">
@endsection
@section('wrapper')
    @if(count($sliders))
        <section class="hero_section" id="hero_slider">
            @foreach($sliders as $key =>$slider)
                <div class="hero_slide transition {{$key === 0 ? 'current' : ''}} {{!isset($sliders[$key+1]) ? 'last' : ''}}"
                     style="{{$slider->file ? 'background: url('. $slider->file->path.'/'.$slider->file->title.')': 'background: url()'}}"
                >
                    <div class="slide_content wrapper">
                        <div class="top transition">
                            {{$slider->language(app()->getLocale())? $slider->language(app()->getLocale())->title: $slider->language()->title}}
                        </div>
                        <div class="main transition medium">
                            {{$slider->language(app()->getLocale())? $slider->language(app()->getLocale())->description: $slider->language()->description}}
                        </div>
                    </div>
                </div>

            @endforeach
            <button class="arrow flex center" id="prev_hero">
                <img src="/client/img/icons/arrows/1.png" alt=""/>
            </button>
            <button class="arrow flex center" id="next_hero">
                <img
                        style="transform: rotate(180deg)"
                        src="/client/img/icons/arrows/1.png"
                        alt=""
                />
            </button>
        </section>
    @endif
    <section class="showcase_bottom_box wrapper flex blue_bg">
        <div class="item flex center">
            <img src="/client/img/icons/other/1.png" alt="" />
            <div class="title medium">@lang('client.products_link')</div>
            <div class="para roboto">
                @lang('client.products_link_description')
            </div>
            <a href="#" class="main_btn">@lang('client.see_more')</a>
        </div>
        <div class="border"></div>
        <div class="item flex center">
            <img src="/client/img/icons/other/2.png" alt="" />
            <div class="title medium">@lang('client.locations_link')</div>
            <div class="para roboto">
                @lang('client.locations_description')
            </div>
            <a href="#" class="main_btn">@lang('client.see_more')</a>
        </div>
        <div class="border"></div>
        <div class="item flex center">
            <img src="/client/img/icons/other/3.png" alt="" />
            <div class="title medium">@lang('client.contact_link')</div>
            <div class="para roboto">
                @lang('client.contact_description')
            </div>
            <a href="#" class="main_btn">@lang('client.see_more')</a>
        </div>
    </section>

    <section class="aboutus_section_home wrapper flex">
        <div class="div">
            <div class="main_titles">
                <div class="s">@lang('client.who_are_we')</div>
                <div class="l2">@lang('client.who_are_we_description')</div>
            </div>
            <div class="para paragraph">
                @lang('client.who_are_we_content')
            </div>
            @include('client.pages.timeline_tine')
        </div>
        <div class="img">
            <img src="/client/img/home/1.png" alt="" />
        </div>
    </section>
    <section class="mission_vision wrapper flex">
        <div class="img"><img src="/client/img/home/2.png" alt="" /></div>
        <div class="div">
            <div class="flex">
                <div>
                    <div class="main_titles">
                        <div class="l2">@lang('client.home_mission')</div>
                    </div>
                    <div class="paragraph">
                        @lang('client.home_mission_content')
                    </div>
                </div>
                <a href="mission.html" class="more main_color">@lang('client.view_more')</a>
            </div>
            <div class="flex right">
                <div>
                    <div class="main_titles">
                        <div class="l2">@lang('client.home_vision')</div>
                    </div>
                    <div class="paragraph">
                        @lang('client.home_vision_content')
                    </div>
                </div>
                <a href="vision.html" class="more main_color">@lang('client.view_more')</a>
            </div>
        </div>
    </section>
    <section class="wellness_blog">
        <div class="wrapper content">
            <div class="head flex">
                <div class="dark_text medium">@lang('client.wellness_blog')</div>
                <a href="wellness-blog.html" class="more main_color">@lang('client.view_more')</a>
            </div>
            <div class="wellness_blog_slider flex">
                @foreach($wellnesses as $wellness)
                    <div class="item">
                        <div class="img">
                            <img src="{{url(count($wellness->files)? $wellness->files[0]->path.'/'.$wellness->files[0]->title : '')}}" alt="" />
                            <div class="date roboto flex center">
                                <div>{{\Carbon\Carbon::parse($wellness->created_at)->format('Y-m-d')}}</div>
                            </div>
                        </div>
                        <div class="dark_text medium">
                            {{$wellness->language(app()->getLocale())? $wellness->language(app()->getLocale())->title: $wellness->language()->title}}
                        </div>
                        <div class="roboto">
                            {!! $wellness->language(app()->getLocale())? substr($wellness->language(app()->getLocale())->content,0,120): substr($wellness->language()->content,0,120) !!}...
                        </div>
                        <a href="blog-detail.html" class="more main_color">@lang('client.view_more')</a>
                    </div>

                @endforeach
            </div>
        </div>
        <button class="arrow ylw flex center" id="prev_blog">
            <img src="/client/img/icons/arrows/1.png" alt="" />
        </button>
        <button class="arrow ylw flex center" id="next_blog">
            <img
                    style="transform: rotate(180deg)"
                    src="/client/img/icons/arrows/1.png"
                    alt=""
            />
        </button>
    </section>

@endsection