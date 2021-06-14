<?php
/**
 *  app/Http/Controllers/Admin/SliderController.php
 *
 * Date-Time: 14.06.21
 * Time: 15:31
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Repositories\SliderRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class SliderController
 * @package App\Http\Controllers\Admin
 */
class SliderController extends Controller
{

    /**
     * @var \App\Repositories\SliderRepositoryInterface
     */
    private $sliderRepository;

    /**
     * SliderController constructor.
     *
     * @param \App\Repositories\SliderRepositoryInterface $sliderRepository
     */
    public function __construct(SliderRepositoryInterface $sliderRepository) {
        $this->sliderRepository = $sliderRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(SliderRequest $request)
    {
        return view('admin.pages.slider.index',[
           'sliders' => $this->sliderRepository->getData($request,['languages']),
            'languages' => $this->activeLanguages()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
