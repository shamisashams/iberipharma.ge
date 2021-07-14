{{-- extend layout --}}
@extends('admin.layout.contentLayoutMaster')
{{-- page title --}}
@section('title', $member->created_at ? __('admin.member-update') : 'admin.member-create')


@section('content')
    <div class="row">
        <div class="col s12 m6 l6">
            <div id="basic-form" class="card card card-default scrollspy">
                <div class="card-content">
                    <input name="old-images[]" id="old_images" hidden disabled value="{{$member->files}}">
                    <h4 class="card-title">{{$member->created_at ? __('admin.member-update') : __('admin.member-create')}}</h4>
                    {!! Form::model($member,['url' => $url, 'method' => $method,'files' => true]) !!}
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
                                    {!! Form::text('name['.$key.']',$member->language($language->id) !== null ? $member->language($language->id)->name:  '',['class' => 'validate '. $errors->has('name.*') ? '' : 'valid']) !!}
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
                                    {!! Form::text('position['.$key.']',$member->language($language->id) !== null ? $member->language($language->id)->position:  '',['class' => 'validate '. $errors->has('position.*') ? '' : 'valid']) !!}
                                    {!! Form::label('position['.$key.']',__('admin.position')) !!}
                                    @error('position.*')
                                    <small class="errorTxt4">
                                        <div class="error">
                                            {{$message}}
                                        </div>
                                    </small>
                                    @enderror
                                </div>
                                <div class="input-field ">
                                    {!! Form::text('contact['.$key.']',$member->language($language->id) !== null ? $member->language($language->id)->contact:  '',['class' => 'validate '. $errors->has('contact.*') ? '' : 'valid']) !!}
                                    {!! Form::label('contact['.$key.']',__('admin.contact')) !!}
                                    @error('contact.*')
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
                            {!! Form::submit($member->created_at ? __('admin.update') : __('admin.create'),['class' => 'btn cyan waves-effect waves-light right']) !!}
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