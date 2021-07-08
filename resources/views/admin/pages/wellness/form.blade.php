{{-- extend layout --}}
@extends('admin.layout.contentLayoutMaster')
{{-- page title --}}
@section('title', $wellness->created_at ? __('admin.wellness-update') : 'admin.wellness-create')

@section('content')
    <div class="row">
        <div class="col s12 m6 l6">
            <div id="basic-form" class="card card card-default scrollspy">
                <div class="card-content">
                    <input name="old-images[]" id="old_images" hidden disabled value="{{$wellness->files}}">
                    <h4 class="card-title">{{$wellness->created_at ? __('admin.wellness-update') : __('admin.wellness-create')}}</h4>
                    {!! Form::model($wellness,['url' => $url, 'method' => $method,'files' => true]) !!}
                    <div class="row">
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
                                    {!! Form::text('name['.$key.']',$wellness->language($language->id) !== null ? $wellness->language($language->id)->name:  '',['class' => 'validate '. $errors->has('name.*') ? '' : 'valid']) !!}
                                    {!! Form::label('name['.$key.']',__('admin.name')) !!}
                                    @error('name.*')
                                    <small class="errorTxt4">
                                        <div class="error">
                                            {{$message}}
                                        </div>
                                    </small>
                                    @enderror
                                </div>
                                <div class="input-field ">
                                    <h5>{{__('admin.content')}}</h5>
                                    <br>
                                    <textarea id="content" class="ckeditor form-control"
                                              name="content[{{$key}}]">
                                                    {!! $wellness->language($language->id) !== null ? $wellness->language($language->id)->content:  '' !!}
                                                </textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col s12 mb-2">
                        <label>
                            <input type="checkbox" name="status"
                                   value="true" {{$wellness->status ? 'checked' : ''}}>
                            <span>{{__('admin.status')}}</span>
                        </label>
                    </div>
                    <br>
                    <br>
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
                            {!! Form::submit($wellness->created_at ? __('admin.update') : __('admin.create'),['class' => 'btn cyan waves-effect waves-light right']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('../admin/ckeditor/ckeditor.js')}}"></script>

@endsection

{{-- vendor script --}}
@section('vendor-script')
    <script src="{{asset('vendors/select2/select2.full.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
    <script src="{{asset('js/scripts/form-select2.js')}}"></script>
@endsection