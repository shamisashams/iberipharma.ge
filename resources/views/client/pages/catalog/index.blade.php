@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.catalog_meta_title')</title>
    <meta name="description"
          content="@lang('client.catalog_meta_description')">
@endsection

@section('wrapper')
    <section class="main_showcase blue_bg">
        <div class="wrapper flex">
            <div class="path">@lang('client.home') -  @lang('client.products')</div>
            <div class="page_name">@lang('client.products')</div>
        </div>
    </section>

    <section class="products_body flex wrapper">
        <form class="filters">
            <div class="title medium dark_text">@lang('client.category')</div>
            @foreach($categories as $category)
                <input
                        class="product_filter {{Request::get('category') == $category->id ? 'active' : ''}}"
                        {{Request::get('category') == $category->id ? 'checked' : ''}}
                        type="radio"
                        name="category"
                        onchange="this.form.submit()"
                        id="product_filter_{{$category->id}}"
                        value="{{$category->id}}"
                />
                <label for="product_filter_{{$category->id}}">
                    {{$category->language(app()->getLocale())? $category->language(app()->getLocale())->title: $category->language()->title}}
                </label>
            @endforeach
        </form>
        <div class="div">
            <div class="head flex">
                <div class="dark_text medium">

                </div>
            </div>
            <div class="product_grid active">
                @if(count($products))
                    @foreach($products as $product)
                        <a href="{{locale_route('client.product.show',$product->slug)}}">
                            <div class="product_item exclusive_product">
                                <div class="img flex center">
                                    <img src="{{url(count($product->files)? $product->files[0]->path.'/'.$product->files[0]->title : '')}}"
                                         alt=""/>
                                </div>
                                <div class="cap">
                                    <div class="name dark_text medium">
                                        {{$product->language(app()->getLocale())? $product->language(app()->getLocale())->title: $product->language()->title}}
                                    </div>
                                    <div class="price flex center">
                                        @if($product->sale)
                                            <div class="dark_text bold">{{$product->sale/100}} ლ</div>
                                            <div class="off" style="text-decoration: line-through">
                                                {{$product->price/100}} ლ
                                            </div>
                                        @else
                                            <div class="dark_text bold">{{$product->price/100}} ლ</div>
                                        @endif
                                    </div>
                                </div>
                                @if($product->sale)
                                    <div class=" percent bold abs flex center">
                                        -{{round(($product->price-$product->sale)/$product->price * 100)}}%
                                    </div>
                                @endif
                            </div>
                        </a>


                    @endforeach
                @else
                    <h3>@lang('client.not_found_items')</h3>
                @endif
            </div>
            {{ $products->appends(request()->input())->links('client.pagination') }}

        </div>
    </section>
@endsection