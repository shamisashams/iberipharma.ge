@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.value_meta_title')</title>
    <meta name="description"
          content="@lang('client.value_meta_description')">
@endsection
@section('wrapper')
    <section class="main_showcase blue_bg">
        <div class="wrapper flex">
            <div class="path">@lang('client.home') - @lang('client.about_us') - @lang('client.value')</div>
            <div class="page_name">@lang('client.value')</div>
        </div>
    </section>

    <section class="values_body wrapper">
        <div class="flex">
            <div>
                <div class="main_titles">
                    <div class="s">@lang('client.value_1_title')</div>
                    <div class="l">
                        @lang('client.value_1_description')
                    </div>
                </div>
                <div class="paragraph">
                    @lang('client.value_1_content')

                </div>
            </div>
            <img src="/client/img/about/value/1.png" alt="" />
        </div>
        <div class="flex">
            <img src="/client/img/about/value/2.png" alt="" />
            <div>
                <div class="main_titles">
                    <div class="s">@lang('client.value_2_title')</div>
                    <div class="l">
                        @lang('client.value_2_description')
                    </div>
                </div>
                <div class="paragraph">
                    @lang('client.value_2_content')
                </div>
            </div>
        </div>
    </section>
@endsection