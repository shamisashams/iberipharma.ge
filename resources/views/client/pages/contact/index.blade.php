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

    <section class="map_city wrapper">
        <div class="all_titles">
            <div class="l">Salons</div>
        </div>
        <div class="map_city_flex flex">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.5459583573206!2d44.76741831567833!3d41.7303154826281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472e79d397513%3A0xa743c3c5de72322d!2s40%20Zhiuli%20Shartava%20St%2C%20T&#39;bilisi!5e0!3m2!1sen!2sge!4v1622613082989!5m2!1sen!2sge" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="all_cities">
                <select name="All Cities" id="" class="select line">
                    <option value="cities">All Cities</option>
                    <option value="cities">Georgia, Tbilisi</option>
                    <option value="cities">Georgia, Batumi</option>
                    <option value="cities">Russia, Moscow</option>
                    <option value="cities">Russia, St. Petersburg</option>
                    <option value="cities">Russia, whatev</option>
                </select>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
                <button class="line flex option">
                    <img src="img/icons/info/4.png" alt="">
                    <p><span class="b">Georgia, Tbilisi </span> Ilia Chavchavadzis gamziri, 21</p>
                </button>
            </div>
        </div>
    </section>
@endsection