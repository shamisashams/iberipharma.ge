@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.principle_meta_title')</title>
    <meta name="description"
          content="@lang('client.principle_meta_description')">
@endsection

@section('wrapper')
    <section class="every_showcase principle">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">Home - Principle</div>
                <div class="title">Principle</div>
            </div>
        </div>
    </section>

    <section class="principle_section wrapper flex">
        <img src="img/other/2.png" alt="">
        <div class="right">
            <div class="all_titles">
                <div class="s">principles</div>
                <div class="l">Our principles</div>
            </div>
            <p class="para">First ask people what they need, and then give it to them.</p>
            <p class="para">This is not an advertising slogan of our company or a quote. This is an extremely simple rule that we follow in everything we do. Many people know it, but this does not mean at all that it is easy to apply when it comes to business. Why?
            </p>
            <p class="para">This approach is not for everyone. Some people don't understand that it is possible to combine commercial success and true customer care that has nothing to do with empty advertising promises. Business success is a measure of your sincerity in offering the market something worthwhile.
            </p>
            <p class="para">Many are already aware of this. As a result, a healthy business develops, which also benefits society.</p>
        </div>
    </section>
@endsection