@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.vision_meta_title')</title>
    <meta name="description"
          content="@lang('client.vision_meta_description')">
@endsection
@section('wrapper')
    <section class="main_showcase blue_bg">
        <div class="wrapper flex">
            <div class="path">@lang('client.home') - @lang('client.about_us') - @lang('client.vision')</div>
            <div class="page_name">@lang('client.vision')</div>
        </div>
    </section>

    <section class="vision_body">
        <div class="wrapper flex first">
            <div class="img">
                <img src="/client/img/about/vision/1.png" alt="" />
                <img src="/client/img/about/vision/3.png" alt="" class="abs" />
            </div>
            <div>
                <div class="main_titles">
                    <div class="s">@lang('client.vision_1_title')</div>
                    <div class="l">
                        @lang('client.vision_1_description')
                    </div>
                </div>
                <div class="paragraph">
                    @lang('client.vision_1_content')
                </div>
            </div>
        </div>
        <div class="wrapper flex">
            <div>
                <div class="main_titles">
                    <div class="l">
                        @lang('client.vision_2_title')
                    </div>
                </div>
                <div class="paragraph">
                    @lang('client.vision_2_content')

                </div>
            </div>
            <div class="img"><img src="/client/img/about/vision/2.png" alt="" /></div>
        </div>
    </section>
@endsection