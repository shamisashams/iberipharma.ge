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
use App\Http\Requests\Admin\BlogRequest;
use App\Repositories\BlogRepositoryInterface;

/**
 * Class CityController
 * @package App\Http\Controllers\Admin
 */
class BlogController extends Controller
{


    /**
     * @var \App\Repositories\CityRepositoryInterface
     */
    private $blogRepository;

    /**
     * CityController constructor.
     *
     * @param \App\Repositories\CityRepositoryInterface $cityRepository
     */
    public function __construct(BlogRepositoryInterface $blogRepository) {
        // initialize memberRepository
        $this->blogRepository = $blogRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(BlogRequest $request)
    {
        return view('admin.pages.blog.index', [
            'blogs' => $this->blogRepository->getData($request),
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
        $blog = $this->blogRepository->model;

        $url = locale_route('blog.store', [], false);
        $method = 'POST';

        return view('admin.pages.blog.form', [
            'blog' => $blog,
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
    public function store(BlogRequest $request)
    {
        $data = [
            'name' => $request['name'],
            'content' => $request['content'],
            'status' => (bool)$request['status'],
            'languages' => $this->activeLanguages(),
        ];

        $blog = $this->blogRepository->create($data);

        // Save Files
        if ($request->hasFile('images')) {
            $blog = $this->blogRepository->saveFiles($blog->id, $request);
        }

        return redirect(locale_route('blog.show', $blog->id))->with('success', 'Blog created.');
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
        $blog = $this->blogRepository->findOrFail($id);

        return view('admin.pages.blog.show',[
            'blog' => $blog,
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
        $blog = $this->blogRepository->findOrfail($id);

        $url = locale_route('blog.update', $id, false);

        $method = 'PUT';

        return view('admin.pages.blog.form', [
            'blog' => $blog,
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
    public function update(string $locale,int $id,BlogRequest $request)
    {
        $data = [
            'name' => $request['name'],
            'content' => $request['content'],
            'status' => (bool)$request['status'],
            'languages' => $this->activeLanguages(),
        ];

        $blog = $this->blogRepository->update($id,$data);

        // Update Files
        $this->blogRepository->saveFiles($id, $request);
        return redirect(locale_route('blog.show', $blog->id))->with('success', 'Blog updated.');
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
        if (!$this->blogRepository->delete($id)) {
            return redirect(locale_route('blog.show', $id))->with('danger', 'Blog not deleted.');
        }
        return redirect(locale_route('blog.index'))->with('success', 'Blog Deleted.');    }
}
