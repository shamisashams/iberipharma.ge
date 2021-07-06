{{-- extend layout --}}
@extends('admin.layout.contentLayoutMaster')
{{-- page title --}}
@section('title', $answer->language()->title)



@section('content')
    <!-- users view start -->
    <div class="card-panel">
        <div class="row">
            <div class="col s12 m7">
                <div class="display-flex media">
                    <div class="media-body">
                        <h6 class="media-heading">
                            <span class="users-view-name">{{$answer->language()->title}} </span>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2">
                <a href="{{locale_route('answer.edit',$answer->id)}}" class="btn-small indigo">
                    @lang('admin.edit')
                </a>
                <a class="btn-small -settings waves-effect -light -btn right ml-3"
                   href="{{locale_route('answer.destroy',$answer->id)}}"
                   onclick="return confirm('Are you sure?')">
                    <span class="hide-on-small-onl">
                        @lang('admin.delete')
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <div class="row">
                <div class="col s12 m4">
                    <table class="striped">
                        <tbody>
                        <tr>
                            <td>@lang('admin.feature'):</td>
                            <td>
                                <a href="{{locale_route('feature.show',$answer->feature->id)}}">
                                    {{$answer->feature->language(app()->getLocale())? substr($answer->feature->language(app()->getLocale())->title,0,35): substr($answer->feature->language()->title,0,35)}}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>@lang('admin.position'):</td>
                            <td>{{$answer->position}}</td>
                        </tr>
                        <tr>
                            <td>@lang('admin.status'):</td>
                            <td>
                                @if($answer->status)
                                    <span class="chip green lighten-5 green-text">@lang('admin.active')</span>
                                @else
                                    <span class="chip red lighten-5 red-text">@lang('admin.not_active')</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>@lang('admin.created_at')</td>
                            <td>{{\Carbon\Carbon::parse($answer->created_at)}}</td>
                        </tr>
                        <tr>
                            <td>@lang('admin.updated_at')</td>
                            <td>{{\Carbon\Carbon::parse($answer->updated_at)}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col s12">
                    <ul class="tabs">
                        @foreach($answer->languages as $key => $language)
                            @if(isset($languages[$language->language_id]))
                                <li class="tab">
                                    <a href="#cat-{{$answer->id}}-{{$language->language_id}}">
                                        {{$languages[$language->language_id]->locale}}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col sm12 mt-2">
                    @foreach($answer->languages as $key => $language)
                        @if(isset($languages[$language->language_id]))
                            <div id="cat-{{$answer->id}}-{{$language->language_id}}"
                                 class="">
                                <table class="striped">
                                    <tbody>
                                    <tr>
                                        <td>@lang('admin.title'):</td>
                                        <td>{{$language->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('admin.created_at')</td>
                                        <td>{{\Carbon\Carbon::parse($language->created_at)}}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('admin.updated_at')</td>
                                        <td>{{\Carbon\Carbon::parse($language->updated_at)}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


