@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.contact_us_meta_title')</title>
    <meta name="description"
          content="@lang('client.contact_us_meta_description')">
@endsection

@section('wrapper')
    <section class="every_showcase contact">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">@lang('client.home') - @lang('client.contact_us')</div>
                <div class="title">
                    @lang('client.contact_us')
                </div>
            </div>
        </div>
    </section>
            {!! Form::open(['url' => locale_route('contact.index'),'method' =>'post',]) !!}

    <section class="contact_section flex wrapper">
        <div class="left">
            <div class="all_titles">
                <div class="s">@lang('client.contact_with_us')</div>
                <div class="l">@lang('client.drop_us_a_message')</div>
            </div>
            <p class="para">@lang('client.its_at_contact_paragraph')</p>
            <div class="title">@lang('client.the_office')</div>
            <a href="#" class="address flex">
                <img src="/client/img/icons/info/1.png" alt="">
                <div>
                    {{$gaddress->language(app()->getLocale())? $gaddress->language(app()->getLocale())->value: $gaddress->language()->value}}
                </div>
            </a>
            <a href="#" class="address flex">
                <img src="/client/img/icons/info/2.png" alt="">
                <div>
                    {{$gphone->language(app()->getLocale())? $gphone->language(app()->getLocale())->value: $gphone->language()->value}}
                </div>
            </a>
            <a href="#" class="address flex">
                <img src="/client/img/icons/info/3.png" alt="">
                <div>
                    {{$gemail->language(app()->getLocale())? $gemail->language(app()->getLocale())->value: $gemail->language()->value}}
                </div>
            </a>
        </div>
        <div class="form flex">
            <div>
                <input name="full_name" type="text" placeholder="@lang('client.Full_name')">
                <input name="email" type="text" placeholder="@lang('client.email_address')">
                <input name="phone" type="text" placeholder="@lang('client.phone_number')">
                <input name="subject" type="text" placeholder="@lang('client.subjects')">
            </div>
            <div>
                <textarea name="message" placeholder="@lang('client.write_a_language')"></textarea>
                <button type="submit" class="send">@lang('client.send_message')</button>
            </div>
        </div>

    </section>
    {!! Form::close() !!}
    </section>
@endsection