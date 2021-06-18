@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.project_meta_title')</title>
    <meta name="description"
          content="@lang('client.project_meta_description')">
@endsection
@section('wrapper')
    <section class="every_showcase projects">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">@lang('client.home') - @lang('client.project')</div>
                <div class="title">@lang('client.projects')</div>
            </div>
        </div>
    </section>
    <section class="projects_page wrapper flex">
        <div class="filters">
            <div class="city">@lang('client.city')</div>
            <button onclick="location.href = '{{locale_route('project.index')}}'"
                    class="project_filter {{Request::get('city') ? '' : 'active'}}">@lang('client.all')</button>
            @foreach($cities as $city)
                <button onclick="location.href = '{{locale_route('project.index')}}?city={{$city->id}}'" class="project_filter {{Request::get('city') == $city->id ? 'active' : ''}}">
                    {{$city->language(app()->getLocale())? $city->language(app()->getLocale())->title: $city->language()->title}}
                </button>
            @endforeach
        </div>
        <div class="pgdiv">
            <div class="title">Projects</div>
            <div class="project_grid_tab active">
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/1.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/2.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/3.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/4.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/5.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/6.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/7.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/8.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/9.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/1.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/2.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/3.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/4.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/5.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/6.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/7.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/8.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
                <div class="project_view_pp">
                    <img src="img/projetcs/cities/9.png" alt="">
                    <div class="cap">
                        <span>Moscow</span>
                        <br>Restaurant "Shashlykoff" Mytischi
                    </div>
                </div>
            </div>
            <div class="project_grid_tab">Moscow</div>
            <div class="project_grid_tab">Saint Petersburg</div>
            <div class="project_grid_tab">Novosibirsk</div>
            <div class="project_grid_tab">Ekaterinburg</div>
            <div class="project_grid_tab">Ufa</div>
            <div class="pagination flex">
                <button  class="btn" id="prev_pag">Previous</button>
                <div class="pagination_slider">
                    <button class="page_num ">1</button>
                    <button class="page_num">2</button>
                    <button class="page_num active">3</button>
                    <button class="page_num">4</button>
                    <button class="page_num">5</button>
                    <button class="page_num">6</button>
                    <button class="page_num">7</button>
                </div>
                <button  class="btn" id="next_pag">Next</button>
            </div>
        </div>
    </section>
@endsection