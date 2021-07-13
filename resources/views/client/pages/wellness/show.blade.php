@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.wellness_detail_meta_title')</title>
    <meta name="description"
          content="@lang('client.wellness_detail_meta_description')">
@endsection

@section('wrapper')
    <section class="main_showcase blue_bg">
        <div class="wrapper flex">
            <div class="path">@lang('client.home') - @lang('client.wellnesss') - @lang('client.wellness_detail')</div>
            <div class="page_name">
                {{$wellness->language(app()->getLocale())? $wellness->language(app()->getLocale())->name: $wellness->language()->name}}
            </div>
        </div>
    </section>
    <section class="wellness_blog_detail wrapper">
        <div class="img">
            <img src="{{url(count($wellness->files)? $wellness->files[0]->path.'/'.$wellness->files[0]->title : '')}}" alt="">
            <div class="date flex roboto">
                <img src="/client/img/icons/other/clock2.png" alt=""/>
                <div>{{\Carbon\Carbon::parse($wellness->created_at)->format('Y-m-d')}}</div>
            </div>
        </div>
        <div class="title bold dark_text">
            {{$wellness->language(app()->getLocale())? $wellness->language(app()->getLocale())->name: $wellness->language()->name}}
        </div>
        {!! $wellness->language(app()->getLocale())? $wellness->language(app()->getLocale())->content: $wellness->language()->content !!}
        <a class="flex center dark_text back" href="{{locale_route('client.wellness.index')}}">
{{--            <img class="transition" src="/client/img/icons/arrows/pb.png" alt=""/>--}}
            <p>@lang('client.back_to_wellness')</p>
        </a>
    </section>

@endsection