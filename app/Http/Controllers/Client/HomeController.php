<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Project;
use App\Models\Slider;
use App\Models\Wellness;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $sliders = Slider::where('status', true)->with('languages')->get();

        $news = Blog::where('status', true)->limit(8)->orderBy('created_at','DESC')->get();


        return view('client.pages.home.index', [
            'sliders' => $sliders,
            'news' => $news,
        ]);
    }

    public function vision()
    {
        return view('client.pages.home.vision', [
        ]);
    }

    public function value()
    {
        return view('client.pages.home.value', [
        ]);
    }

    public function mission()
    {
        return view('client.pages.home.mission', [
        ]);
    }

    public function company()
    {
        return view('client.pages.home.company', [
        ]);
    }

    public function location()
    {
        return view('client.pages.home.location', [
        ]);
    }
}
