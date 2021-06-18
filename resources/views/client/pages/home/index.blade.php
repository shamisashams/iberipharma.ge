@extends('client.layout.site')
@section('subhead')
@endsection

@section('wrapper')
    <section class="hero_section" id="slider_on_hero">
        <div class="slides hero_slide current">
            <div class="slide_content wrapper">
                <div class="title roboto">Lorem Ipsum</div>
                <p class="paragraph">
                    It Is A Long Established Fact That A Reader Will Be Distracted By
                    The <br />
                    Readable Content Of A Page When Looking At Its Layout. The Point Of
                    <br />
                    Using Lorem Ipsumit Is A Long Established Fact
                </p>
            </div>
        </div>
        <div class="slides hero_slide">
            <div class="slide_content wrapper">
                <div class="title roboto">bodsa Ipsadfbum</div>
                <p class="paragraph">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint
                    doloremque at praesentium labore aspernatur quasi maiores omnis<br />
                    incidunt, debitis optio voluptatibus, ? Readable Content Of A Page
                    When Looking At Its Layout. The Point Of
                    <br />
                    Using Lorem Ipsumit Is A Long Established Factdolorum repudiandae
                    vero quos nihil accusantium magni natus quas
                </p>
            </div>
        </div>
        <div class="slides hero_slide">
            <div class="slide_content wrapper">
                <div class="title roboto">adfb pakhsuj</div>
                <p class="paragraph">
                    Readable Content Of A Page When Looking At Its Layout. The Point Of
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. <br />
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    <br />
                    Using Lorem Ipsumit Is A Long Established Fact
                </p>
            </div>
        </div>
        <div class="slides hero_slide">
            <div class="slide_content wrapper">
                <div class="title roboto">mahtep loposeye</div>
                <p class="paragraph">
                    dictaro ji Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ratione<br />
                    Readable Content Of A Page When Looking At Its Layout. The Point Of
                    <br />
                    Using Lorem Ipsumit Is A Long Established Fact
                </p>
            </div>
        </div>
        <div class="slides hero_slide last">
            <div class="slide_content wrapper">
                <div class="title roboto">fghse8v sdflihn</div>
                <p class="paragraph">
                    Readable Content Of A Page When Looking At Its Layout. The Point Of
                    The <br />
                    It Is A Long Established Fact That A Reader Will Be Distracted By
                    <br />
                    Using Lorem Ipsumit Is A Long Established Fact
                </p>
            </div>
        </div>
        <button class="arr" id="prev_slide">
            <img src="img/icons/slide/prev.png" alt="" />
        </button>
        <button class="arr" id="next_slide">
            <img src="img/icons/slide/next.png" alt="" />
        </button>
        <div class="dots" id="dot_on_sliders">
            <button class="hero_dot clicked"></button>
            <button class="hero_dot"></button>
            <button class="hero_dot"></button>
            <button class="hero_dot"></button>
            <button class="hero_dot"></button>
        </div>
    </section>

    <section class="secsec_grid">
        <div class="wrapper grid">
            <div class="item_img">
                <img src="img/projetcs/1.png" alt="" />
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
                <img src="img/projetcs/2.png" alt="" />
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
                <img src="img/projetcs/3.png" alt="" />
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
                <img src="img/projetcs/4.png" alt="" />
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
                <img src="img/projetcs/5.png" alt="" />
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <a href="#">
                    <button class="main_btn">View All</button>
                </a>
            </div>
        </div>
        <div class="grid">
            <div class="finished_grid">
                <img src="img/projetcs/6.png" alt="" />
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <a href="#">
                    <button class="main_btn large">Moscow</button>
                </a>
            </div>
            <div class="finished_grid">
                <img src="img/projetcs/7.png" alt="" />
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <a href="#">
                    <button class="main_btn large">Ekaterinburg</button>
                </a>
            </div>
            <div class="finished_grid">
                <img src="img/projetcs/8.png" alt="" />
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <a href="#">
                    <button class="main_btn large">Krasnodar</button>
                </a>
            </div>
            <div class="finished_grid">
                <img src="img/projetcs/9.png" alt="" />
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <a href="#">
                    <button class="main_btn large">Saratov</button>
                </a>
            </div>
            <div class="finished_grid">
                <img src="img/projetcs/10.png" alt="" />
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <a href="#">
                    <button class="main_btn large">Omsk</button>
                </a>
            </div>
            <div class="finished_grid">
                <img src="img/projetcs/11.png" alt="" />
                <div class="the_frame"></div>
                <div class="box_shadow"></div>
                <a href="#">
                    <button class="main_btn large">Sochi</button>
                </a>
            </div>
        </div>
    </section>
@endsection