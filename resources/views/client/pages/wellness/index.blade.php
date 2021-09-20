@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.wellness_meta_title')</title>
    <meta name="description"
          content="@lang('client.wellness_meta_description')">
@endsection

@section('wrapper')

    <section class="main_showcase blue_bg">
        <div class="wrapper flex">
            <div class="path">@lang('client.home') - @lang('client.wellness_blog')</div>
            <div class="page_name">@lang('client.wellness_blog')</div>
        </div>
    </section>

    <section class="wellness_blog_main_body">
        <div class="blogs">
            @foreach($wellnesses as $wellness)
                <div class="blog_box">
                    <div class="img"><img src="{{url(count($wellness->files)? $wellness->files[0]->path.'/'.$wellness->files[0]->title : '')}}" alt="" /></div>
                    <div class="cap">
                        <div class="posted">@lang('client.posted_on'): <span>{{\Carbon\Carbon::parse($wellness->created_at)->format('Y-m-d')}}</span></div>
                        <div class="dark_text bold">
                            {{$wellness->language(app()->getLocale())? $wellness->language(app()->getLocale())->name: $wellness->language()->name}}
                        </div>
                        <div class="paragraph">
                            {!! $wellness->language(app()->getLocale())? substr($wellness->language(app()->getLocale())->content,0,170): substr($wellness->language()->content,0,170) !!}

                        </div>
                        <a href="{{locale_route('client.wellness.show',$wellness->id)}}">
                            <button class="main_btn">@lang('client.see_more')</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $wellnesses->appends(request()->input())->links('client.pagination') }}
    </section>
@endsection