<?php
/**
 *  app/Http/Controllers/Admin/ProjectController.php
 *
 * Date-Time: 09.06.21
 * Time: 16:13
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectRequest;
use App\Repositories\CityRepositoryInterface;
use App\Repositories\ProjectRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class ProjectController
 * @package App\Http\Controllers\Admin
 */
class ProjectController extends Controller
{

    /**
     * @var \App\Repositories\ProjectRepositoryInterface
     */
    private $projectRepository;
    /**
     * @var \App\Repositories\CityRepositoryInterface
     */
    private $cityRepository;

    public function __construct(ProjectRepositoryInterface $projectRepository, CityRepositoryInterface $cityRepository)
    {
        // Initialize projectRepository
        $this->projectRepository = $projectRepository;

        // Initialize cityRepository
        $this->cityRepository = $cityRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Requests\Admin\ProjectRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(ProjectRequest $request)
    {
        return view('admin.pages.project.index', [
            'projects' => $this->projectRepository->getData($request,['city']),
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
        $project = $this->projectRepository->model;

        $url = locale_route('project.store', [], false);
        $method = 'POST';

        return view('admin.pages.project.form', [
            'project' => $project,
            'url' => $url,
            'method' => $method,
            'languages' => $this->activeLanguages(),
            'cities' => $this->cityRepository->all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Admin\ProjectRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ProjectRequest $request)
    {
        $data = [
            'city_id' => $request['city_id'],
            'status' => (bool)$request['status'],
            'title' => $request['title'],
            'languages' => $this->activeLanguages(),
        ];

        $project = $this->projectRepository->create($data);

        return redirect(locale_route('project.show', $project->id))->with('success', 'Project created.');
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
