<footer class="footer">
    <div class="wrapper">
        <div class="footer_grid">
            <div class="categories">
                <div class="title">@lang('client.about_us')</div>
                <a href="{{locale_route('timeline.index')}}" class="link">
                    @lang('client.timeline')
                </a>
                <a href="{{locale_route('principle.index')}}" class="link">
                    @lang('client.principle')
                </a>
                <a href="{{locale_route('client.certificate.index')}}" class="link">
                    @lang('client.certificates')
                </a>
            </div>
            <div class="categories">
                <div class="title">@lang('client.contact_is')</div>
                <a target="_blank" href="{{$gemail->language(app()->getLocale())? $gemail->language(app()->getLocale())->value: $gemail->language()->value}}" class="link"><span class="light">@lang('client.email'):</span>
                    {{$gemail->language(app()->getLocale())? $gemail->language(app()->getLocale())->value: $gemail->language()->value}}
                </a>
                <a target="_blank" href="{{$gaddress->language(app()->getLocale())? $gaddress->language(app()->getLocale())->value: $gaddress->language()->value}}" class="link"><span class="light">@lang('client.address'):</span>
                    {{$gaddress->language(app()->getLocale())? $gaddress->language(app()->getLocale())->value: $gaddress->language()->value}}
                </a>
                <a target="_blank" href="{{$gphone->language(app()->getLocale())? $gphone->language(app()->getLocale())->value: $gphone->language()->value}}" class="link"><span class="light">@lang('client.phone'):</span>
                    {{$gphone->language(app()->getLocale())? $gphone->language(app()->getLocale())->value: $gphone->language()->value}}
                </a>
            </div>
        </div>
        <p class="paragraph">@lang('client.it_is_a_long_established_fact_that_a_reader_will_be_distracted')</div>
    </p>
    <div class="social_privacy flex wrapper">
        <div class="social_media">
            <a target="_blank" href="{{$ginstagram->language(app()->getLocale())? $ginstagram->language(app()->getLocale())->value: $ginstagram->language()->value}}">
                <img src="/client/img/icons/sm/ig.png" alt="">
            </a>
            <a target="_blank" href="{{$gfacebook->language(app()->getLocale())? $gfacebook->language(app()->getLocale())->value: $gfacebook->language()->value}}">
                <img src="/client/img/icons/sm/fb.png" alt="">
            </a>
        </div>
    </div>
    <div class="bottom wrapper">
        <div class="insite">Design By Insite International </div>
    </div>
    </div>
</footer>