<?php
/**
 *  app/Http/Controllers/Admin/LanguageController.php
 *
 * Date-Time: 03.06.21
 * Time: 16:15
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LanguageRequest;
use App\Models\Language;
use App\Repositories\LanguageRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class LanguageController
 * @package App\Http\Controllers\Admin
 */
class LanguageController extends Controller
{

    /**
     * @var \App\Repositories\LanguageRepositoryInterface
     */
    private $languageRepository;

    public function __construct(LanguageRepositoryInterface $languageRepository)
    {
        // Initialize languageRepository
        $this->languageRepository = $languageRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(LanguageRequest $request)
    {
        return view('admin.pages.language.index', [
            'languages' => $this->languageRepository->getData($request)
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
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param string $locale
     * @param \App\Models\Language $language
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $locale, Language $language)
    {
        return view('admin.pages.language.show',[
            'language' => $language
        ]);
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
