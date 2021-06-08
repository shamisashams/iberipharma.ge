{{-- extend layout --}}
@extends('admin.layout.contentLayoutMaster')
{{-- page title --}}
@section('title', $category->slug ? __('admin.category-update') : 'admin.category-create')
@section('content')
    <div class="row">
        <div class="col s12 m6 l6">
            <div id="basic-form" class="card card card-default scrollspy">
                <div class="card-content">
                    <h4 class="card-title">{{$category->slug ? __('admin.category-update') : __('admin.category-create')}}</h4>
                    {!! Form::model($category,['url' => $url, 'method' => $method]) !!}
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
                        <div class="col s12">
                            <ul class="tabs">
                                @foreach($languages as $key => $language)
                                    <li class="tab col s3">
                                        <a href="#lang-{{$key}}">{{$language->locale}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @foreach($languages as $key => $language)
                            <div id="lang-{{$key}}" class="col s12  mt-5">
                                <div class="input-field col s12">
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
                                <div class="input-field col s12">
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


