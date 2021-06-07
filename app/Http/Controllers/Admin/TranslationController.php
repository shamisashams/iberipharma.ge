<?php
/**
 *  app/Http/Controllers/Admin/TranslationController.php
 *
 * Date-Time: 07.06.21
 * Time: 09:35
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TranslationRequest;
use App\Models\Language;
use App\Repositories\TranslationRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class TranslationController
 * @package App\Http\Controllers\Admin
 */
class TranslationController extends Controller
{

    /**
     * @var \App\Repositories\TranslationRepositoryInterface
     */
    private $translationRepository;
    private $activeLanguages;

    public function __construct(TranslationRepositoryInterface $translationRepository)
    {
        // Initialize TranslationRepository
        $this->translationRepository = $translationRepository;
        $this->activeLanguages = Language::where('status', true)->orderBy('default', 'DESC')->get()->keyBy('id');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(TranslationRequest $request)
    {
        return view('admin.pages.translation.index', [
            'translations' => $this->translationRepository->getData($request),
            'languages' => $this->activeLanguages
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
