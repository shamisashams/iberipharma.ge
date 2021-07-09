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
    <section class="contact_body">
        <div class="map_showcase">
            <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11910.400862537912!2d44.76561407750312!3d41.7291448984398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472ddadc78fb3%3A0x9f529d5044be3023!2sZhiuli%20Shartava%20St%2C%20T&#39;bilisi!5e0!3m2!1sen!2sge!4v1623144796967!5m2!1sen!2sge"
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
            ></iframe>
        </div>
        <div class="contact_box flex">
            <div class="info blue_bg">
                <div class="title">
                    <div class="main_color">@lang('client.contact_us')</div>
                    <div class="bold">@lang('client.Do_You_Have_Questions_?')</div>
                </div>
                <div class="paragraph">
                    @lang('client.contact_description')
                </div>
                <a href="" class="flex address">
                    <img src="/client/img/icons/contact/1.png" alt="" />
                    <div class="roboto">{{$gaddress->language(app()->getLocale())? $gaddress->language(app()->getLocale())->value: $gaddress->language()->value}}</div>
                </a>
                <a href="" class="flex address">
                    <img src="/client/img/icons/contact/2.png" alt="" />
                    <div class="roboto">{{$gphone->language(app()->getLocale())? $gphone->language(app()->getLocale())->value: $gphone->language()->value}}</div>
                </a>
                <a href="" class="flex address">
                    <img src="/client/img/icons/contact/3.png" alt="" />
                    <div class="roboto">{{$gemail->language(app()->getLocale())? $gemail->language(app()->getLocale())->value: $gemail->language()->value}}</div>
                </a>
            </div>
            <div class="form">
                <div class="grid">
                    <input name="full_name" type="text" placeholder="@lang('client.Full_name')">
                    <input name="email" type="text" placeholder="@lang('client.email_address')">
                    <input name="phone" type="text" placeholder="@lang('client.phone_number')">
                    <input name="subject" type="text" placeholder="@lang('client.subjects')">
                </div>
                    <textarea name="message" placeholder="@lang('client.write_a_message')"></textarea>
                    <button type="submit" class="main_btn">@lang('client.send_message')</button>
            </div>
        </div>
    </section>
    {!! Form::close() !!}
@endsection