{{-- extend layout --}}
@extends('admin.layout.contentLayoutMaster')
{{-- page title --}}
@section('title', $feature->type ? __('admin.feature-update') : 'admin.feature-create')
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2-materialize.css')}}">
@endsection
{{-- page style --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/form-select2.css')}}">
@endsection
@section('content')
    <div class="row">
        <div class="col s12 m6 l6">
            <div id="basic-form" class="card card card-default scrollspy">
                <div class="card-content">
                    <h4 class="card-title">{{$feature->type ? __('admin.feature-update') : __('admin.feature-create')}}</h4>
                    {!! Form::model($feature,['url' => $url, 'method' => $method]) !!}
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="type" class="select2 js-example-programmatic browser-default"
                                    id="programmatic-single">
                                <optgroup>
                                    <option value="input" selected>Input</option>
                                    <option value="textarea">Text Area</option>
                                    <option value="checkbox">Text Area</option>
                                    <option value="radio">Radio</option>
                                    <option value="select">Select</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="input-field col s12">
                            {!! Form::text('position',$feature->position,['class' => 'validate '. $errors->has('position') ? '' : 'valid']) !!}
                            {!! Form::label('position',__('admin.position')) !!}
                            @error('position')
                            <small class="errorTxt4">
                                <div class="error">
                                    {{$message}}
                                </div>
                            </small>
                            @enderror
                        </div>
                        <div class="col s12 mb-2">
                            <label>
                                <input type="checkbox" name="status"
                                       value="true" {{$feature->status ? 'checked' : ''}}>
                                <span>{{__('admin.status')}}</span>
                            </label>
                        </div>
                        <div class="col s12 mb-2">
                            <label>
                                <input type="checkbox" name="search"
                                       value="true" {{$feature->search ? 'checked' : ''}}>
                                <span>{{__('admin.search')}}</span>
                            </label>
                        </div>
                        <ul class="tabs">
                            @foreach($languages as $key => $language)
                                <li class="tab col ">
                                    <a href="#lang-{{$key}}">{{$language->locale}}</a>
                                </li>
                            @endforeach
                        </ul>
                        @foreach($languages as $key => $language)
                            <div id="lang-{{$key}}" class="col s12  mt-5">
                                <div class="input-field ">
                                    {!! Form::text('title['.$key.']',$feature->language($language->id) !== null ? $feature->language($language->id)->title:  '',['class' => 'validate '. $errors->has('title.*') ? '' : 'valid']) !!}
                                    {!! Form::label('title['.$key.']',__('admin.title')) !!}
                                    @error('title.*')
                                    <small class="errorTxt4">
                                        <div class="error">
                                            {{$message}}
                                        </div>
                                    </small>
                                    @enderror
                                </div>
                            </div>

                        @endforeach
                    </div>
                    <div class="input-field">
                        <select class="select2-customize-result browser-default" multiple="multiple"
                                id="select2-customize-result" name="categories[]">
                            <optgroup label="@lang('admin.categories')">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$feature->hasCategory($category->id) ? 'selected' : ''}}>{{$category->language()->title}}</option>
                                @endforeach
                            </optgroup>
                        </select>
                        @error('categories.*')
                        <small class="errorTxt4">
                            <div class="error">
                                {{$message}}
                            </div>
                        </small>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            {!! Form::submit($feature->type ? __('admin.update') : __('admin.create'),['class' => 'btn cyan waves-effect waves-light right']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>

@endsection

{{-- vendor script --}}
@section('vendor-script')
    <script src="{{asset('vendors/select2/select2.full.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
    <script src="{{asset('js/scripts/form-select2.js')}}"></script>
@endsection