@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.news_detail_meta_title')</title>
    <meta name="description"
          content="@lang('client.news_detail_meta_description')">
@endsection

@section('wrapper')
    <section class="main_showcase blue_bg">
        <div class="wrapper flex">
            <div class="path">@lang('client.home') - @lang('client.news') - @lang('client.news_detail')</div>
            <div class="page_name">
                {{$new->language(app()->getLocale())? $new->language(app()->getLocale())->name: $new->language()->name}}
            </div>
        </div>
    </section>

    <section class="wellness_blog_detail news_detail wrapper">
        <div class="img">
            <img src="{{url(count($new->files)? $new->files[0]->path.'/'.$new->files[0]->title : '')}}" alt="">
            <div class="date flex roboto">
                <img src="/client/img/icons/other/clock2.png" alt=""/>
                <div>{{\Carbon\Carbon::parse($new->created_at)->format('Y-m-d')}}</div>
            </div>
        </div>
        <div class="title bold dark_text">
            {{$new->language(app()->getLocale())? $new->language(app()->getLocale())->name: $new->language()->name}}
        </div>
        {!! $new->language(app()->getLocale())? $new->language(app()->getLocale())->content: $new->language()->content !!}

        <a class="flex center dark_text back" href="{{locale_route('news.index')}}">
            <img class="transition" src="/client/img/icons/arrows/pb.png" alt=""/>
            <p>@lang('client.back_to_news')</p>
        </a>
    </section>
@endsection