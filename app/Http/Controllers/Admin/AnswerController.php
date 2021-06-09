<?php
/**
 *  app/Http/Controllers/Admin/AnswerController.php
 *
 * Date-Time: 09.06.21
 * Time: 11:19
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AnswerRequest;
use App\Repositories\AnswerRepositoryInterface;
use App\Repositories\FeatureRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class AnswerController
 * @package App\Http\Controllers\Admin
 */
class AnswerController extends Controller
{


    /**
     * @var \App\Repositories\AnswerRepositoryInterface
     */
    private $answerRepository;
    /**
     * @var \App\Repositories\FeatureRepositoryInterface
     */
    private $featureRepository;

    /**
     * AnswerController constructor.
     *
     * @param \App\Repositories\AnswerRepositoryInterface $answerRepository
     * @param \App\Repositories\CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(AnswerRepositoryInterface $answerRepository, FeatureRepositoryInterface $featureRepository)
    {
        // Initialize answerRepository
        $this->answerRepository = $answerRepository;

        // Initialize featureRepository
        $this->featureRepository = $featureRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(AnswerRequest $request)
    {
        return view('admin.pages.answer.index', [
            'answers' => $this->answerRepository->getData($request, ['feature']),
            'languages' => $this->activeLanguages()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $answer = $this->answerRepository->model;

        $url = locale_route('answer.store', [], false);
        $method = 'POST';

        return view('admin.pages.answer.form', [
            'answer' => $answer,
            'url' => $url,
            'method' => $method,
            'languages' => $this->activeLanguages(),
            'features' => $this->featureRepository->all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Admin\AnswerRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(AnswerRequest $request)
    {
        $data = [
            'feature_id' => $request['feature_id'],
            'position' => $request['position'],
            'status' => (bool)$request['status'],
            'title' => $request['title'],
            'languages' => $this->activeLanguages(),
        ];

        $answer = $this->answerRepository->create($data);

        return redirect(locale_route('answer.show',$answer->id))->with('success', 'Answer created.');
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
