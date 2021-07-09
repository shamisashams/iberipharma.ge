<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request, string $locale)
    {
        $news = Blog::where('status',true)->paginate(16);

        return view('client.pages.news.index', [
            'news' => $news,
        ]);
    }

    public function show(Request $request, string $locale, string $id)
    {
        $new = Blog::where(['status' => true, 'id' => $id])->firstOrFail();

        return view('client.pages.news.show', [
            'new' => $new,
        ]);
    }

}
