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
     * @param string $locale
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $locale, int $id)
    {
        $feature = $this->featureRepository->findOrFail($id);

        return view('admin.pages.feature.show', [
            'feature' => $feature,
            'languages' => $this->activeLanguages()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $locale
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(string $locale, int $id)
    {
        $feature = $this->featureRepository->findOrFail($id);

        $url = locale_route('feature.update', $id, false);
        $method = 'PUT';

        return view('admin.pages.feature.form', [
            'feature' => $feature,
            'url' => $url,
            'method' => $method,
            'languages' => $this->activeLanguages(),
            'categories' => $this->categoryRepository->all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param string $locale
     * @param int $id
     *
     * @param \App\Http\Requests\Admin\FeatureRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(string $locale, int $id,FeatureRequest $request)
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


        $this->featureRepository->update($id, $data);

        return redirect(locale_route('feature.show', $id))->with('success', 'Feature Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $locale
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(string $locale, int $id)
    {
        if (!$this->featureRepository->delete($id)) {
            return redirect(locale_route('feature.show', $id))->with('danger', 'Feature not deleted.');
        }
        return redirect(locale_route('feature.index'))->with('success', 'Feature Deleted.');
    }
}
