{{-- extend layout --}}
@extends('admin.layout.contentLayoutMaster')

{{-- page title --}}
@section('title',__('admin.member'))


@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
            <div id="button-trigger" class="card card card-default scrollspy">

                <div class="card-content">
                    <a class="btn-floating btn-large primary-text gradient-shadow compose-email-trigger "
                       href="{{locale_route('member.create')}}">
                        <i class="material-icons">add</i>
                    </a>
                    <h4 class="card-title mt-2">@lang('admin.member')</h4>
                    <div class="row">
                        <div class="col s12">
                            <form class="mr-0 p-0">
                                <table id="data-table-simple" class="display">
                                    <thead>
                                    <tr>
                                        <th>@lang('admin.id')</th>
                                        <th>@lang('admin.name')</th>
                                        <th>@lang('admin.position')</th>
                                        <th>@lang('admin.actions')</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <th>
                                            <input type="number" name="id" onchange="this.form.submit()"
                                                   value="{{Request::get('id')}}"
                                                   class="validate {{$errors->has('id') ? '' : 'valid'}}">
                                        </th>
                                        <th>
                                            <input type="text" name="name" onchange="this.form.submit()"
                                                   value="{{Request::get('name')}}"
                                                   class="validate {{$errors->has('name') ? '' : 'valid'}}">
                                        </th>
                                        <th>
                                            <input type="text" name="position" onchange="this.form.submit()"
                                                   value="{{Request::get('position')}}"
                                                   class="validate {{$errors->has('position') ? '' : 'valid'}}">
                                        </th>
                                        <th></th>
                                    </tr>
                                    <tbody>
                                    @if($members)
                                        @foreach($members as $member)
                                            <tr>
                                                <td>{{$member->id}}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <ul class="tabs">
                                                                @foreach($member->languages as $key => $language)
                                                                    @if(isset($languages[$language->language_id]))
                                                                        <li class="tab ">
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
                                                                    <div id="cat-{{$member->id}}-{{$language->name}}"
                                                                         class="">
                                                                        {{$language->name}}
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <ul class="tabs">
                                                                @foreach($member->languages as $key => $language)
                                                                    @if(isset($languages[$language->language_id]))
                                                                        <li class="tab ">
                                                                            <a href="#cat2-{{$member->id}}-{{$language->language_id}}">
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
                                                                    <div id="cat2-{{$member->id}}-{{$language->position}}"
                                                                         class="">
                                                                        {{$language->position}}
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <a href="{{locale_route('member.show',$member->id)}}">
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </a>
                                                    <a href="{{locale_route('member.edit',$member->id)}}"
                                                       class="pl-3">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <a href="{{locale_route('member.destroy',$member->id)}}"
                                                       onclick="return confirm('Are you sure?')" class="pl-3">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </form>
                            {{ $members->appends(request()->input())->links('admin.vendor.pagination.material') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


