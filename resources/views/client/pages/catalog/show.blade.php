@extends('client.layout.site')
@section('subhead')
    <title>{{$product->language(app()->getLocale())? $product->language(app()->getLocale())->meta_title: $product->language()->meta_title}}</title>
    <meta name="description"
          content="{{$product->language(app()->getLocale())? $product->language(app()->getLocale())->meta_description: $product->language()->meta_description}}">
@endsection

@section('wrapper')
    <section class="main_showcase blue_bg">
        <div class="wrapper flex">
            <div class="path">@lang('client.home') - @lang('client.product')
                - {{$product->language(app()->getLocale())? $product->language(app()->getLocale())->title: $product->language()->title}}</div>
            <div class="page_name">{{$product->language(app()->getLocale())? $product->language(app()->getLocale())->title: $product->language()->title}}</div>
        </div>
    </section>
    <section class="product_detail_body wrapper">
        <div class="flex">
            <div class="product_view">
                <div class="img flex center">
                    @foreach($product->files as $key => $file)
                        <img src="{{url($file->path.'/'.$file->title)}}"
                             class="large_image {{$key === 0 ? 'active' : ''}}" alt="">
                    @endforeach
                </div>
                <div class="img_row">
                    @foreach($product->files as $key => $file)
                        <div class="small_images {{$key === 0 ? 'active' : ''}}">
                            <img src="{{url($file->path.'/'.$file->title)}}" alt="">

                        </div>
                    @endforeach
                </div>
                <button class="arr transition" id="prev_primg">
                    <img src="/client/img/icons/arrows/l-a.png" alt=""/>
                </button>
                <button class="arr transition" id="next_primg">
                    <img src="/client/img/icons/arrows/l-a.png" alt=""/>
                </button>
            </div>
            <div class="info">
                <div class="name bold dark_text">
                    {!! $product->language(app()->getLocale())? $product->language(app()->getLocale())->title: $product->language()->title !!}
                </div>
                <div class="price flex center">
                    @if($product->sale)
                        <div class="dark_text bold">{{$product->sale/100}}ლ</div>
                        <div style="text-decoration: line-through">{{$product->price/100}}</div>
                        <div class="off main_color">-{{round(($product->price-$product->sale)/$product->price * 100)}}
                            %
                        </div>
                    @else
                        {{$product->price/100}} ლ
                    @endif
                </div>
                <div>
                    @foreach($product->features as $feature)
                        <div>
                        <span class="medium dark_text">
                            {{$feature->feature->language(app()->getLocale())? $feature->feature->language(app()->getLocale())->title: $feature->feature->language()->title}}:
                        </span>
                            @foreach($feature->answers()->get() as $key => $answer)
                                {{$answer->language(app()->getLocale())? $answer->language(app()->getLocale())->title: $answer->language()->title}}
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div class="paragraph">
                    {!! $product->language(app()->getLocale())? $product->language(app()->getLocale())->description: $product->language()->description !!}
                </div>
            </div>
        </div>
        <div class="description">
            <div class="head bold">@lang('client.description')</div>
            {!! $product->language(app()->getLocale())? $product->language(app()->getLocale())->content: $product->language()->content !!}
        </div>
    </section>
@endsection