<?php
/**
 *  app/Http/Controllers/Admin/CityController.php
 *
 * Date-Time: 09.06.21
 * Time: 14:44
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WellnessRequest;
use App\Repositories\WellnessRepositoryInterface;

/**
 * Class CityController
 * @package App\Http\Controllers\Admin
 */
class WellnessController extends Controller
{


    /**
     * @var \App\Repositories\CityRepositoryInterface
     */
    private $wellnessRepository;

    /**
     * CityController constructor.
     *
     * @param \App\Repositories\CityRepositoryInterface $cityRepository
     */
    public function __construct(WellnessRepositoryInterface $wellnessRepository) {
        // initialize memberRepository
        $this->wellnessRepository = $wellnessRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(WellnessRequest $request)
    {
        return view('admin.pages.wellness.index', [
            'wellnesses' => $this->wellnessRepository->getData($request),
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
        $wellness = $this->wellnessRepository->model;

        $url = locale_route('wellness.store', [], false);
        $method = 'POST';

        return view('admin.pages.wellness.form', [
            'wellness' => $wellness,
            'url' => $url,
            'method' => $method,
            'languages' => $this->activeLanguages(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Admin\CityRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(WellnessRequest $request)
    {
        $data = [
            'name' => $request['name'],
            'content' => $request['content'],
            'status' => (bool)$request['status'],
            'languages' => $this->activeLanguages(),
        ];

        $wellness = $this->wellnessRepository->create($data);

        // Save Files
        if ($request->hasFile('images')) {
            $wellness = $this->wellnessRepository->saveFiles($wellness->id, $request);
        }

        return redirect(locale_route('wellness.show', $wellness->id))->with('success', 'Wellness created.');
    }

    /**
     *
     * Display the specified resource.
     *
     * @param string $locale
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $locale, int $id)
    {
        $wellness = $this->wellnessRepository->findOrFail($id);

        return view('admin.pages.wellness.show',[
            'wellness' => $wellness,
            'languages' => $this->activeLanguages()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(string $locale, int $id)
    {
        $wellness = $this->wellnessRepository->findOrfail($id);

        $url = locale_route('wellness.update', $id, false);

        $method = 'PUT';

        return view('admin.pages.wellness.form', [
            'wellness' => $wellness,
            'url' => $url,
            'method' => $method,
            'languages' => $this->activeLanguages(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param string $locale
     * @param int $id
     *
     * @param \App\Http\Requests\Admin\CityRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(string $locale,int $id,WellnessRequest $request)
    {
        $data = [
            'name' => $request['name'],
            'content' => $request['content'],
            'status' => (bool)$request['status'],
            'languages' => $this->activeLanguages(),
        ];

        $wellness = $this->wellnessRepository->update($id,$data);

        // Update Files
        $this->wellnessRepository->saveFiles($id, $request);
        return redirect(locale_route('wellness.show', $wellness->id))->with('success', 'Wellness updated.');
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
        if (!$this->wellnessRepository->delete($id)) {
            return redirect(locale_route('wellness.show', $id))->with('danger', 'Wellness not deleted.');
        }
        return redirect(locale_route('wellness.index'))->with('success', 'Wellness Deleted.');    }
}
