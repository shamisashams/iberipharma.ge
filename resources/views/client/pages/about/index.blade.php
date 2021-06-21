@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.about_us_meta_title')</title>
    <meta name="description"
          content="@lang('client.about_us_meta_description')">
@endsection

@section('wrapper')
    <section class="every_showcase about">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">Home - About</div>
                <div class="title">About us</div>
            </div>
        </div>
    </section>

    <div class="about_us">
        <section class="learn_more wrapper flex">
            <div class="img">
                <img src="img/about/1.png" alt="">
                <div class="circle roboto">Founded <br> in 1998</div>
            </div>
            <div class="right">
                <div class="all_titles">
                    <div class="s">Learn More About</div>
                    <div class="l">Get to Know About</div>
                </div>
                <div class="experience">We have 23+ years of experiences</div>
                <p class="para">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua lonm andhn. Aenean tincidunt id mauris id aucto</p>
                <p class="para">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua lonm andhn. Aenean tincidunt id mauris id aucto</p>
                <p class="para">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua lonm andhn. Aenean tincidunt id mauris id aucto</p>
            </div>
        </section>
        <section class="company_history wrapper">
            <div class="all_titles">
                <div class="s">Company history</div>
                <div class="l">Timeline</div>
            </div>

            <div class="history_slide">
                <div class="history_line">
                    <div class="dashed">
                        <div class="year_pin upsidedown a">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">2020-2021</div>
                            <div class="texts event">Lorem Ipsum</div>
                        </div>
                        <div class="year_pin b">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">2020-2021</div>
                            <div class="texts event">Lorem Ipsum</div>
                        </div>
                        <div class="year_pin upsidedown c">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">2020-2021</div>
                            <div class="texts event">Lorem Ipsum</div>
                        </div>
                        <div class="year_pin d">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">2020-2021</div>
                            <div class="texts event">Lorem Ipsum</div>
                        </div>
                    </div>
                </div>
                <div class="history_line">
                    <div class="dashed">
                        <div class="year_pin upsidedown a">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">2020-2021</div>
                            <div class="texts event">Lorem Ipsum</div>
                        </div>
                        <div class="year_pin b">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">2020-2021</div>
                            <div class="texts event">Lorem Ipsum</div>
                        </div>
                        <div class="year_pin upsidedown c">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">2020-2021</div>
                            <div class="texts event">Lorem Ipsum</div>
                        </div>
                        <div class="year_pin d">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">2020-2021</div>
                            <div class="texts event">Lorem Ipsum</div>
                        </div>
                    </div>
                </div>
                <div class="history_line">
                    <div class="dashed">
                        <div class="year_pin upsidedown a">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">2020-2021</div>
                            <div class="texts event">Lorem Ipsum</div>
                        </div>
                        <div class="year_pin b">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">2020-2021</div>
                            <div class="texts event">Lorem Ipsum</div>
                        </div>
                        <div class="year_pin upsidedown c">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">2020-2021</div>
                            <div class="texts event">Lorem Ipsum</div>
                        </div>
                        <div class="year_pin d">
                            <div class="circle">
                                <span class="dot"></span>
                            </div>
                            <div class="texts year">2020-2021</div>
                            <div class="texts event">Lorem Ipsum</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <img src="img/about/p1.png" alt="" class="pattern1">
        <img src="img/about/p2.png" alt="" class="pattern2">
    </div>

    <section class="company_certificate wrapper">
        <div class="flex">
            <div class="all_titles">
                <div class="s">Learn More About</div>
                <div class="l">Get to Know About</div>
            </div>
            <a href="certificates.html" class="see_more">See More</a>
        </div>
        <div class="slide">
            <button id="prev_certify"><img src="img/icons/slide/prev.png" alt=""></button>
            <div class="company_certificate_slide">
                <div class="certify">
                    <img src="/client/img/certificate/1.png" alt="">
                    <div class="cap roboto">Certificate for use in children's and medical schools</div>
                </div>
                <div class="certify">
                    <img src="/client/img/certificate/1.png" alt="">
                    <div class="cap roboto">Certificate for use in children's and medical schools</div>
                </div>
                <div class="certify">
                    <img src="/client/img/certificate/1.png" alt="">
                    <div class="cap roboto">Certificate for use in children's and medical schools</div>
                </div>
                <div class="certify">
                    <img src="/client/img/certificate/1.png" alt="">
                    <div class="cap roboto">Certificate for use in children's and medical schools</div>
                </div>
                <div class="certify">
                    <img src="/client/img/certificate/1.png" alt="">
                    <div class="cap roboto">Certificate for use in children's and medical schools</div>
                </div>
                <div class="certify">
                    <img src="/client/img/certificate/1.png" alt="">
                    <div class="cap roboto">Certificate for use in children's and medical schools</div>
                </div>
                <div class="certify">
                    <img src="/client/img/certificate/1.png" alt="">
                    <div class="cap roboto">Certificate for use in children's and medical schools</div>
                </div>
                <div class="certify">
                    <img src="/client/img/certificate/1.png" alt="">
                    <div class="cap roboto">Certificate for use in children's and medical schools</div>
                </div>
                <div class="certify">
                    <img src="/client/img/certificate/1.png" alt="">
                    <div class="cap roboto">Certificate for use in children's and medical schools</div>
                </div>
                <div class="certify">
                    <img src="/client/img/certificate/1.png" alt="">
                    <div class="cap roboto">Certificate for use in children's and medical schools</div>
                </div>
                <div class="certify">
                    <img src="/client/img/certificate/1.png" alt="">
                    <div class="cap roboto">Certificate for use in children's and medical schools</div>
                </div>
            </div>
            <button id="next_certify"><img src="/client/img/icons/slide/next.png" alt=""></button>
        </div>
    </section>

@endsection