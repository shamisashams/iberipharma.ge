<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
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

        $wellnesses = Wellness::where('status', true)->limit(8)->get();


        return view('client.pages.home.index', [
            'sliders' => $sliders,
            'wellnesses' => $wellnesses,
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
