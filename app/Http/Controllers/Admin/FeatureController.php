<?php
/**
 *  app/Http/Controllers/Admin/FeatureController.php
 *
 * Date-Time: 08.06.21
 * Time: 14:23
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\FeatureRequest;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\FeatureRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class FeatureController
 * @package App\Http\Controllers\Admin
 */
class FeatureController extends Controller
{

    /**
     * @var \App\Repositories\FeatureRepositoryInterface
     */
    private $featureRepository;
    /**
     * @var \App\Repositories\CategoryRepositoryInterface
     */
    private $categoryRepository;

    /**
     * FeatureController constructor.
     *
     * @param \App\Repositories\FeatureRepositoryInterface $featureRepository
     */
    public function __construct(FeatureRepositoryInterface $featureRepository, CategoryRepositoryInterface $categoryRepository)
    {
        // Initialize featureRepository
        $this->featureRepository = $featureRepository;

        // Initialize categoryRepository
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(FeatureRequest $request)
    {
        return view('admin.pages.feature.index', [
            'features' => $this->featureRepository->getData($request, ['languages']),
            'languages' => $this->activeLanguages()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $feature = $this->featureRepository->model;

        $url = locale_route('feature.store', [], false);
        $method = 'POST';

        return view('admin.pages.feature.form', [
            'feature' => $feature,
            'url' => $url,
            'method' => $method,
            'languages' => $this->activeLanguages(),
            'categories' => $this->categoryRepository->all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param string $locale
     * @param \App\Http\Requests\Admin\FeatureRequest $request
     *
     */
    public function store(string $locale, FeatureRequest $request)
    {
        $data = [
            'type' => $request['type'],
            'position' => $request['position'],
            'status' => (bool)$request['status'],
            'search' => (bool)$request['search'],
            'title' => $request['title'],
            'languages' => $this->activeLanguages(),
            'categories' => $request['categories']
        ];

        $feature = $this->featureRepository->create($data);

        return redirect(locale_route('feature.show', $feature->id))->with('success', 'Feature created.');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
