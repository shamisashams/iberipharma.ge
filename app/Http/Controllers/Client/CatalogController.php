<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request, string $locale, string $slug)
    {
        $category = Category::where(['slug' => $slug, 'status' => true])->with(['features' => function($query){
            $query->where('search',true);
        },'features.answers' => function($query) {
            $query->where('status',true);
        }])->firstOrFail();

        $products = Product::where(['status' => true, 'category_id' => $category->id]);

        return view('client.pages.catalog.index', [
            'products' => $products->paginate(1),
            'category' => $category
        ]);
    }
}
