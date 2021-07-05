{{-- extend layout --}}
@extends('admin.layout.contentLayoutMaster')
{{-- page title --}}
@section('title', $member->language()->name)



@section('content')
    <!-- users view start -->
    <div class="card-panel">
        <div class="row">
            <div class="col s12 m7">
                <div class="display-flex media">
                    <div class="media-body">
                        <h6 class="media-heading">
                            <span class="users-view-name">{{$member->language()->name}} </span>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2">
                <a href="{{locale_route('member.edit',$member->id)}}" class="btn-small indigo">
                    @lang('admin.edit')
                </a>
                <a class="btn-small -settings waves-effect -light -btn right ml-3"
                   href="{{locale_route('member.destroy',$member->id)}}"
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
                            <td>@lang('admin.created_at')</td>
                            <td>{{\Carbon\Carbon::parse($member->created_at)}}</td>
                        </tr>
                        <tr>
                            <td>@lang('admin.updated_at')</td>
                            <td>{{\Carbon\Carbon::parse($member->updated_at)}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col s12">
                    <ul class="tabs">
                        @foreach($member->languages as $key => $language)
                            @if(isset($languages[$language->language_id]))
                                <li class="tab">
                                    <a href="#cat-{{$member->id}}-{{$language->language_id}}">
                                        {{$languages[$language->language_id]->locale}}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col sm12 mt-2">
                    @foreach($member->languages as $key => $language)
                        @if(isset($languages[$language->language_id]))
                            <div id="cat-{{$member->id}}-{{$language->language_id}}"
                                 class="">
                                <table class="striped">
                                    <tbody>
                                    <tr>
                                        <td>@lang('admin.name'):</td>
                                        <td>{{$language->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('admin.position'):</td>
                                        <td>{{$language->position}}</td>
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


