@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.company_meta_title')</title>
    <meta name="description"
          content="@lang('client.company_meta_description')">
@endsection
@section('wrapper')
    <section class="main_showcase blue_bg">
        <div class="wrapper flex">
            <div class="path">@lang('client.home') - @lang('client.about_us') - @lang('client.company')</div>
            <div class="page_name">@lang('client.company')</div>
        </div>
    </section>
    <section class="company_history_body">
        <div class="wrapper flex first">
            <div>
                <div class="main_titles">
                    <div class="s">@lang('client.history')</div>
                    <div class="l">@lang('client.company_history')</div>
                </div>
                <div class="paragraph">
                    @lang('client.company_history_content')
                </div>
            </div>
            <img src="/client/img/about/vision/4.png" alt="" />
            <div class="pro_box flex">
                <div class="item">
                    <div class="bold">@lang('client.company_65')</div>
                    <div class="dark_text medium">@lang('client.professional_staff')</div>
                </div>
                <div class="border"></div>
                <div class="item">
                    <div class="bold">@lang('client.company_100+')</div>
                    <div class="dark_text medium">@lang('client.kind_of_medicine')</div>
                </div>
                <div class="border"></div>
                <div class="item">
                    <div class="bold">@lang('client.company_50')</div>
                    <div class="dark_text medium">@lang('client.specialist')</div>
                </div>
                <div class="border"></div>
                <div class="item">
                    <div class="bold">@lang('client.company_10K+')</div>
                    <div class="dark_text medium">@lang('client.active_members')</div>
                </div>
            </div>
        </div>
        <div class="wrapper timeline">

            @include('client.pages.timeline')
        </div>
    </section>
@endsection