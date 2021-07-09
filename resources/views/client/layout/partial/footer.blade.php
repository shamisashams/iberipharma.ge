<footer class="footer">
    <div class="wrapper flex">
        <div class="column">
            <a href="{{locale_route('home.index')}}" class="logo">
                <img src="/client/img/logo/1.png" alt="" />
            </a>
            <div class="para">
                @lang('client.site_description')
            </div>


            <div class="social_media flex">
                <a target="_blank" href="{{$ginstagram->language(app()->getLocale())? $ginstagram->language(app()->getLocale())->value: $ginstagram->language()->value}}">
                    <img src="/client/img/icons/sm/1.png" alt="" />
                </a>
                <a target="_blank" href="{{$gfacebook->language(app()->getLocale())? $gfacebook->language(app()->getLocale())->value: $gfacebook->language()->value}}">
                    <img src="/client/img/icons/sm/2.png" alt="" />
                </a>
            </div>
        </div>
        <div class="column">
            <div class="dark_text medium">Customer Service</div>
            <a href="#" class="dark_text4 medium">Returns & Exchange</a>
            <a href="#" class="dark_text4 medium">FAQ</a>
            <a href="#" class="dark_text4 medium">Payment Methods</a>
            <a href="#" class="dark_text4 medium">Size Guides</a>
            <a href="#" class="dark_text4 medium">Contact Us</a>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="wrapper">
            <div class="dark_text bold">Design By Insite International</div>
        </div>
    </div>
</footer>