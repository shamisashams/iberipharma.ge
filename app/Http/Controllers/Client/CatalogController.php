<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request, string $locale)
    {
        $products = Product::where([
            'status' => true
        ]);

        if ($request->get('category')) {
            $products = $products->where('category_id',$request->get('category'));
        }
        $categories = Category::where('status', true)->get();


        return view('client.pages.catalog.index', [
            'products' => $products->paginate(12),
            'categories' => $categories
        ]);
    }

    public function show(Request $request, string $locale, string $slug)
    {
        $product = Product::with('features')->where(['status' => true, 'slug' => $slug])->firstOrFail();

        return view('client.pages.catalog.show', [
            'product' => $product,
        ]);
    }

}
