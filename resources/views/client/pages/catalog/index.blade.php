@extends('client.layout.site')
@section('subhead')
@endsection

@section('wrapper')
    <section class="every_showcase catalog">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">@lang('client.home') - @lang('client.catalog')</div>
                <div class="title">@lang('client.catalog')</div>
            </div>
        </div>
    </section>

    <section class="catalog_section flex wrapper">
        <div class="filter_bar">
            <div class="box">
                <div class="title">Lorem Ipsum</div>
                <div class="option">Lorem Ipsum</div>
                <div class="option">Lorem Ipsum</div>
                <div class="option">Lorem Ipsum</div>
                <button class="show_more">Show more</button>
            </div>
            <div class="box">
                <div class="title">Lorem Ipsum</div>
                <div class="option">Lorem Ipsum</div>
                <div class="option">Lorem Ipsum</div>
                <div class="option">Lorem Ipsum</div>
                <button class="show_more">Show more</button>
            </div>
            <div class="box">
                <div class="title">Lorem Ipsum</div>
                <div class="option">Lorem Ipsum</div>
                <div class="option">Lorem Ipsum</div>
                <div class="option">Lorem Ipsum</div>
                <button class="show_more">Show more</button>
            </div>
        </div>
        <div class="cgsec">
            <div class="catalog_grid">
                @foreach($products as $product)
                    <a href="" class="catalog_item">
                        <div class="img flex">
                            <img src="{{url(count($product->files)? $product->files[0]->path.'/'.$product->files[0]->title : '')}}"
                                 alt="">
                        </div>
                        <div class="cap flex">
                            <div>
                                {{$product->language(app()->getLocale())? $product->language(app()->getLocale())->title: $product->language()->title}}
                            </div>
                            <div>${{number_format($product->price/100)}}</div>
                        </div>
                    </a>

                @endforeach
            </div>
            {{ $products->appends(request()->input())->links('client.pagination') }}
        </div>
    </section>
@endsection