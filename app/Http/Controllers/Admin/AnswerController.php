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
use App\Repositories\AnswerRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class AnswerController
 * @package App\Http\Controllers\Admin
 */
class AnswerController extends Controller
{

    /**
     * @var \App\Repositories\CategoryRepositoryInterface
     */
    private $categoryRepositoy;
    /**
     * @var \App\Repositories\AnswerRepositoryInterface
     */
    private $answerRepository;

    /**
     * AnswerController constructor.
     *
     * @param \App\Repositories\AnswerRepositoryInterface $answerRepository
     * @param \App\Repositories\CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(AnswerRepositoryInterface $answerRepository, CategoryRepositoryInterface $categoryRepository) {
        // Initialize answerRepository
        $this->answerRepository = $answerRepository;

        // Initialize categoryRepository
        $this->categoryRepositoy = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
