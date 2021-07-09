@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.member_meta_title')</title>
    <meta name="description"
          content="@lang('client.member_meta_description')">
@endsection

@section('wrapper')

    <section class="main_showcase blue_bg">
        <div class="wrapper flex">
            <div class="path">@lang('client.home') - @lang('client.about_us') - @lang('client.team')</div>
            <div class="page_name">@lang('client.company_team')</div>
        </div>
    </section>

    <section class="company_team_body wrapper">
        <div class="main_titles">
            <div class="s">@lang('client.team')</div>
            <div class="l">@lang('client.company_team')</div>
        </div>
        <div class="team_grid">
            @foreach($members as $member)
                <div class="person">
                    <div class="img">
                        <img src="{{url(count($member->files)? $member->files[0]->path.'/'.$member->files[0]->title : '')}}"
                             alt=""/>
                    </div>
                    <div class="id">
                        <div class="roboto medium dark_text">
                            {{$member->language(app()->getLocale())? $member->language(app()->getLocale())->name: $member->language()->name}}
                        </div>
                        <div class="roboto medium pos">
                            {!! $member->language(app()->getLocale())? $member->language(app()->getLocale())->position: $member->language()->position !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection