{{-- extend layout --}}
@extends('admin.layout.contentLayoutMaster')
{{-- page title --}}
@section('title', $category->slug ? __('admin.category-update') : 'admin.category-create')

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
                    <input name="old-images[]" id="old_images" hidden disabled value="{{$category->files}}">
                    <h4 class="card-title">{{$category->slug ? __('admin.category-update') : __('admin.category-create')}}</h4>
                    {!! Form::model($category,['url' => $url, 'method' => $method,'files' => true]) !!}
                    <div class="row">
                        <div class="input-field col s12">
                            {!! Form::text('slug',$category->slug,['class' => 'validate '. $errors->has('slug') ? '' : 'valid']) !!}
                            {!! Form::label('slug',__('admin.slug')) !!}
                            @error('slug')
                            <small class="errorTxt4">
                                <div class="error">
                                    {{$message}}
                                </div>
                            </small>
                            @enderror
                        </div>
                        <div class="input-field col s12">
                            {!! Form::text('position',$category->position,['class' => 'validate '. $errors->has('position') ? '' : 'valid']) !!}
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
                                       value="true" {{$category->status ? 'checked' : ''}}>
                                <span>Status</span>
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
                                <div class="input-field">
                                    {!! Form::text('title['.$key.']',$category->language($language->id) !== null ? $category->language($language->id)->title:  '',['class' => 'validate '. $errors->has('text.*') ? '' : 'valid']) !!}
                                    {!! Form::label('title['.$key.']',__('admin.title')) !!}
                                    @error('text.*')
                                    <small class="errorTxt4">
                                        <div class="error">
                                            {{$message}}
                                        </div>
                                    </small>
                                    @enderror
                                </div>
                                <div class="input-field">
                                    {!! Form::text('description['.$key.']',$category->language($language->id) !== null ? $category->language($language->id)->description:  '',['class' => 'validate '. $errors->has('text.*') ? '' : 'valid']) !!}
                                    {!! Form::label('description['.$key.']',__('admin.description')) !!}
                                    @error('description.*')
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
                                id="select2-customize-result" name="features[]">
                            <optgroup label="@lang('admin.features')">
                                @foreach($features as $feature)
                                    <option value="{{$feature->id}}" {{$category->hasFeature($feature->id) ? 'selected' : ''}}>
                                        {{$feature->language(app()->getLocale()) ? substr($feature->language(app()->getLocale())->title,0,25) : substr($feature->language()->title,0,25)}}
                                    </option>
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
                    <div class="form-group">
                        <div class="input-images"></div>
                        @if ($errors->has('images'))
                            <span class="help-block">
                                            {{ $errors->first('images') }}
                                        </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            {!! Form::submit($category->slug ? __('admin.update') : __('admin.create'),['class' => 'btn cyan waves-effect waves-light right']) !!}
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