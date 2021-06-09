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
use App\Http\Requests\Admin\CityRequest;
use App\Repositories\CityRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class CityController
 * @package App\Http\Controllers\Admin
 */
class CityController extends Controller
{


    /**
     * @var \App\Repositories\CityRepositoryInterface
     */
    private $cityRepository;

    /**
     * CityController constructor.
     *
     * @param \App\Repositories\CityRepositoryInterface $cityRepository
     */
    public function __construct(CityRepositoryInterface $cityRepository) {
        // initialize cityRepository
        $this->cityRepository = $cityRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(CityRequest $request)
    {
        return view('admin.pages.city.index', [
            'cities' => $this->cityRepository->getData($request),
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
        $city = $this->cityRepository->model;

        $url = locale_route('city.store', [], false);
        $method = 'POST';

        return view('admin.pages.city.form', [
            'city' => $city,
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
    public function store(CityRequest $request)
    {
        $data = [
            'status' => (bool)$request['status'],
            'title' => $request['title'],
            'languages' => $this->activeLanguages(),
        ];

        $city = $this->cityRepository->create($data);

        return redirect(locale_route('city.show', $city->id))->with('success', 'City created.');
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
        $city = $this->cityRepository->findOrFail($id);

        return view('admin.pages.city.show',[
            'city' => $city,
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
        $city = $this->cityRepository->findOrfail($id);

        $url = locale_route('city.update', $id, false);

        $method = 'PUT';

        return view('admin.pages.city.form', [
            'city' => $city,
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
    public function update(string $locale,int $id,CityRequest $request)
    {
        $data = [
            'status' => (bool)$request['status'],
            'title' => $request['title'],
            'languages' => $this->activeLanguages(),
        ];

        $city = $this->cityRepository->update($id,$data);

        return redirect(locale_route('city.show', $city->id))->with('success', 'City updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
