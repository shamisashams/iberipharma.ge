<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Wellness;
use Illuminate\Http\Request;

class WellnessController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request, string $locale)
    {
        $wellnesses = Wellness::where('status',true)->paginate(16);

        return view('client.pages.wellness.index', [
            'wellnesses' => $wellnesses,
        ]);
    }

    public function show(Request $request, string $locale, string $id)
    {
        $wellness = Wellness::where(['status' => true, 'id' => $id])->firstOrFail();

        return view('client.pages.wellness.show', [
            'wellness' => $wellness,
        ]);
    }
}
