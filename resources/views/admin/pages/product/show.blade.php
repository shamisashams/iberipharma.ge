{{-- extend layout --}}
@extends('admin.layout.contentLayoutMaster')
{{-- page title --}}
@section('title', $product->language()->title)



@section('content')
    <!-- users view start -->
    <div class="card-panel">
        <div class="row">
            <div class="col s12 m7">
                <div class="display-flex media">
                    <div class="media-body">
                        <h6 class="media-heading">
                            <span class="users-view-name">{{$product->language()->title}} </span>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2">
                <a href="{{locale_route('product.edit',$product->id)}}" class="btn-small indigo">
                    @lang('admin.edit')
                </a>
                <a class="btn-small -settings waves-effect -light -btn right ml-3"
                   href="{{locale_route('product.destroy',$product->id)}}"
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
                            <td>@lang('admin.category'):</td>
                            <td>
                                <a href="{{locale_route('category.show',$product->category_id)}}">
                                    {{$product->category->language(app()->getLocale())? $product->category->language(app()->getLocale())->title: $product->category->language()->title}}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>@lang('admin.slug'):</td>
                            <td>
                                {{$product->slug}}
                            </td>
                        </tr>
                        <tr>
                            <td>@lang('admin.price'):</td>
                            <td>
                                {{$product->price/100}}
                            </td>
                        </tr>
                        <tr>
                            <td>@lang('admin.status'):</td>
                            <td>
                                @if($product->status)
                                    <span class="chip green lighten-5 green-text">@lang('admin.active')</span>
                                @else
                                    <span class="chip red lighten-5 red-text">@lang('admin.not_active')</span>
                                @endif
                            </td>
                        </tr>
                        @foreach($product->features as $feature)
                            <tr>
                                <td>
                                    <a href="{{locale_route('feature.show',$feature->feature->id)}}">
                                        {{$feature->feature->language(app()->getLocale()) ? $feature->feature->language(app()->getLocale())->title : $feature->feature->language()->title}}
                                    </a>
                                </td>
                                <td>
                                    @foreach($feature->answers()->get() as $key =>$answer)
                                        <a href="{{locale_route('answer.show',$answer->id)}}">
                                            {{$answer->language(app()->getLocale())? $answer->language(app()->getLocale())->title: $answer->language()->title}}
                                            {{isset($feature->answers[$key +1]) ? ', ' : ''}}
                                        </a>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>@lang('admin.created_at')</td>
                            <td>{{\Carbon\Carbon::parse($product->created_at)}}</td>
                        </tr>
                        <tr>
                            <td>@lang('admin.updated_at')</td>
                            <td>{{\Carbon\Carbon::parse($product->updated_at)}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col s12">
                    <ul class="tabs">
                        @foreach($product->languages as $key => $language)
                            @if(isset($languages[$language->language_id]))
                                <li class="tab">
                                    <a href="#cat-{{$product->id}}-{{$language->language_id}}">
                                        {{$languages[$language->language_id]->locale}}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col sm12 mt-2">
                    @foreach($product->languages as $key => $language)
                        @if(isset($languages[$language->language_id]))
                            <div id="cat-{{$product->id}}-{{$language->language_id}}"
                                 class="">
                                <table class="striped">
                                    <tbody>
                                    <tr>
                                        <td>@lang('admin.meta_title'):</td>
                                        <td>{{$language->meta_title}}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('admin.meta_description'):</td>
                                        <td>{{$language->meta_description}}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('admin.meta_keywords'):</td>
                                        <td>{{$language->meta_keywords}}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('admin.title'):</td>
                                        <td>{{$language->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('admin.description'):</td>
                                        <td>{{$language->description}}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('admin.content'):</td>
                                        <td>{{$language->content}}</td>
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

    <div class="section">
        <div class="section">
            <div class="masonry-gallery-wrapper">
                <div class="popup-gallery">
                    <div class="gallery-sizer"></div>
                    <div class="row">
                        @foreach($product->files as $file)
                            <div class="col s12 m6 l4 xl2">
                                <div>
                                    <a href="{{asset($file->path.'/'.$file->title)}}" target="_blank" title="$file->title">
                                        <img src="{{asset($file->path.'/'.$file->title)}}" class="responsive-img mb-10" alt="">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


