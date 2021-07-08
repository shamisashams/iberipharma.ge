@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.catalog_meta_title')</title>
    <meta name="description"
          content="@lang('client.catalog_meta_description')">
@endsection

@section('wrapper')

    <section class="main_showcase blue_bg">
        <div class="wrapper flex">
            <div class="path">@lang('client.home') - @lang('client.news')</div>
            <div class="page_name">@lang('client.news')</div>
        </div>
    </section>

    <section class="main_news_body wrapper">
        <div class="news_body_grid">
            @foreach($news as $new)
                <div class="news_item">
                    <div class="img">
                        <img class="nm" src="{{url(count($new->files)? $new->files[0]->path.'/'.$new->files[0]->title : '')}}" alt="" />
                        <div class="date flex roboto">
                            <img src="/client/img/icons/other/clock.png" alt="" />
                            <p>{{\Carbon\Carbon::parse($new->created_at)->format('Y-m-d')}}</p>
                        </div>
                    </div>
                    <div class="cap">
                        <div class="dark_text medium">
                            {{$new->language(app()->getLocale())? $new->language(app()->getLocale())->name: $new->language()->name}}
                        </div>
                        <div class="roboto">
                            {!! $new->language(app()->getLocale())? substr($new->language(app()->getLocale())->content,0,70): substr($new->language()->content,0,70) !!}
                        </div>
                        <a href="news-detail.html">
                            <button class="main_btn">@lang('client.see_more')</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $news->appends(request()->input())->links('client.pagination') }}
    </section>
@endsection