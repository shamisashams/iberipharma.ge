@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.mission_meta_title')</title>
    <meta name="description"
          content="@lang('client.mission_meta_description')">
@endsection
@section('wrapper')
    <section class="main_showcase blue_bg">
        <div class="wrapper flex">
            <div class="path">@lang('client.home') - @lang('client.about_us') - @lang('client.missions')</div>
            <div class="page_name">@lang('client.missions')</div>
        </div>
    </section>

    <section class="mission_body wrapper">
        <div class="flex">
            <img src="/client/img/about/mission/3.jpg" alt="" />
            <div>
                <div class="main_titles overflow">
                    <div class="s">@lang('client.mission_1_title')</div>
                    <div class="l">
                        @lang('client.mission_1_description')
                    </div>
                </div>
                <div class="paragraph margin">
                    @lang('client.mission_1_content_1')
                </div>
                <div class="paragraph">
                    @lang('client.mission_1_content_2')
                </div>
            </div>
        </div>
        <div class="flex">
            <div>
                <div class="main_titles">
                    <div class="l">
                        @lang('client.mission_2_description')

                    </div>
                </div>
                <div class="paragraph">
                    @lang('client.mission_2_content')

                </div>
            </div>
            <img src="/client/img/about/mission/2.png" alt="" />
        </div>
    </section>
@endsection