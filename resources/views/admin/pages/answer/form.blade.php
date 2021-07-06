{{-- extend layout --}}
@extends('admin.layout.contentLayoutMaster')
{{-- page title --}}
@section('title', $answer->category_id ? __('admin.answer-update') : 'admin.answer-create')

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
                    <h4 class="card-title">{{$answer->type ? __('admin.answer-update') : __('admin.answer-create')}}</h4>
                    {!! Form::model($answer,['url' => $url, 'method' => $method]) !!}
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="feature_id" class="select2 js-example-programmatic browser-default"
                                    id="programmatic-single">
                                <optgroup>
                                    @foreach($features as $feature)
                                        <option value="{{$feature->id}}" {{$answer->feature_id === $feature->id ? 'selected' : ''}}>
                                            {{$feature->language(app()->getLocale())? substr($feature->language(app()->getLocale())->title,0,55): substr($feature->language()->title,0,55)}}
                                        </option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                        <div class="input-field col s12">
                            {!! Form::text('position',$answer->position,['class' => 'validate '. $errors->has('position') ? '' : 'valid']) !!}
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
                                       value="true" {{$answer->status ? 'checked' : ''}}>
                                <span>{{__('admin.status')}}</span>
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
                                    {!! Form::text('title['.$key.']',$answer->language($language->id) !== null ? $answer->language($language->id)->title:  '',['class' => 'validate '. $errors->has('title.*') ? '' : 'valid']) !!}
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

                    <div class="row">
                        <div class="input-field col s12">
                            {!! Form::submit($answer->feature_id ? __('admin.update') : __('admin.create'),['class' => 'btn cyan waves-effect waves-light right']) !!}
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