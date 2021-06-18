@extends('client.layout.site')
@section('subhead')
@endsection

@section('wrapper')
    @if(count($sliders))
        <section class="hero_section" id="slider_on_hero">
            @foreach($sliders as $key =>$slider)
                <div class="slides hero_slide {{$key === 0 ? 'current' : ''}} {{!isset($sliders[$key+1]) ? 'last' : ''}}"
                    style="{{$slider->file ? 'background: url('. $slider->file->path.'/'.$slider->file->title.')': 'background: url()'}}"
                >
                    <div class="slide_content wrapper">
                        <div class="title roboto">
                            {{$slider->language(app()->getLocale())? $slider->language(app()->getLocale())->title: $slider->language()->title}}
                        </div>
                        <p class="paragraph">
                            {{$slider->language(app()->getLocale())? $slider->language(app()->getLocale())->description: $slider->language()->description}}
                        </p>
                    </div>
                </div>

            @endforeach
            <button class="arr" id="prev_slide">
                <img src="/client/img/icons/slide/prev.png" alt=""/>
            </button>
            <button class="arr" id="next_slide">
                <img src="/client/img/icons/slide/next.png" alt=""/>
            </button>
            <div class="dots" id="dot_on_sliders">
                <button class="hero_dot clicked"></button>
                <button class="hero_dot"></button>
                <button class="hero_dot"></button>
                <button class="hero_dot"></button>
                <button class="hero_dot"></button>
            </div>
        </section>
    @endif
    <section class="secsec_grid">
        <div class="wrapper grid">
            <div class="item_img">
                <img src="img/projetcs/1.png" alt=""/>
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <div class="item_content">
                    <div class="color">Colors</div>
                    <a href="#">
                        <button class="main_btn">See All Collections</button>
                    </a>
                </div>
            </div>
            <div class="item_img">
                <img src="img/projetcs/2.png" alt=""/>
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <div class="item_content">
                    <div class="color">Colors</div>
                    <a href="#">
                        <button class="main_btn">See All Collections</button>
                    </a>
                </div>
            </div>
            <div class="item_img">
                <img src="img/projetcs/3.png" alt=""/>
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <div class="item_content">
                    <div class="color">Colors</div>
                    <a href="#">
                        <button class="main_btn">See All Collections</button>
                    </a>
                </div>
            </div>
            <div class="item_img">
                <img src="img/projetcs/4.png" alt=""/>
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <div class="item_content">
                    <div class="color">Colors</div>
                    <a href="#">
                        <button class="main_btn">See All Collections</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="finished_projects wrapper flex">
        <div class="left">
            <div class="head roboto">Finished <span>Projects</span></div>
            <div class="view_all">
                <img src="img/projetcs/5.png" alt=""/>
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <a href="#">
                    <button class="main_btn">View All</button>
                </a>
            </div>
        </div>
        <div class="grid">
            <div class="finished_grid">
                <img src="img/projetcs/6.png" alt=""/>
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <a href="#">
                    <button class="main_btn large">Moscow</button>
                </a>
            </div>
            <div class="finished_grid">
                <img src="img/projetcs/7.png" alt=""/>
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <a href="#">
                    <button class="main_btn large">Ekaterinburg</button>
                </a>
            </div>
            <div class="finished_grid">
                <img src="img/projetcs/8.png" alt=""/>
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <a href="#">
                    <button class="main_btn large">Krasnodar</button>
                </a>
            </div>
            <div class="finished_grid">
                <img src="img/projetcs/9.png" alt=""/>
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <a href="#">
                    <button class="main_btn large">Saratov</button>
                </a>
            </div>
            <div class="finished_grid">
                <img src="img/projetcs/10.png" alt=""/>
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <a href="#">
                    <button class="main_btn large">Omsk</button>
                </a>
            </div>
            <div class="finished_grid">
                <img src="img/projetcs/11.png" alt=""/>
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <a href="#">
                    <button class="main_btn large">Sochi</button>
                </a>
            </div>
        </div>
    </section>
@endsection