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
use App\Http\Requests\Admin\CertificateRequest;
use App\Http\Requests\Admin\ProjectRequest;
use App\Repositories\CertificateRepositoryInterface;
use App\Repositories\CityRepositoryInterface;
use App\Repositories\ProjectRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class ProjectController
 * @package App\Http\Controllers\Admin
 */
class CertificateController extends Controller
{


    /**
     * @var \App\Repositories\CertificateRepositoryInterface
     */
    private $certificateRepository;

    public function __construct(CertificateRepositoryInterface $certificateRepository)
    {
        // Initialize projectRepository
        $this->certificateRepository = $certificateRepository;

    }

    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Requests\Admin\ProjectRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(CertificateRequest $request)
    {
        return view('admin.pages.certificate.index', [
            'certificates' => $this->certificateRepository->getData($request, ['languages']),
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
        $certificate = $this->certificateRepository->model;

        $url = locale_route('certificate.store', [], false);
        $method = 'POST';

        return view('admin.pages.certificate.form', [
            'certificate' => $certificate,
            'url' => $url,
            'method' => $method,
            'languages' => $this->activeLanguages(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Admin\ProjectRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CertificateRequest $request)
    {
        $data = [
            'type' => $request['type'],
            'status' => (bool)$request['status'],
            'title' => $request['title'],
            'languages' => $this->activeLanguages(),
        ];

        $certificate = $this->certificateRepository->create($data);

        // Save Files
        if ($request->hasFile('images')) {
            $certificate = $this->certificateRepository->saveFiles($certificate->id, $request);
        }

        return redirect(locale_route('certificate.show', $certificate->id))->with('success', 'Certificate created.');
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
        $certificate = $this->certificateRepository->findOrFail($id);

        return view('admin.pages.certificate.show', [
            'certificate' => $certificate,
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
        $certificate = $this->certificateRepository->findOrfail($id);

        $url = locale_route('certificate.update', $id, false);

        $method = 'PUT';

        return view('admin.pages.certificate.form', [
            'certificate' => $certificate,
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
     * @param \App\Http\Requests\Admin\ProjectRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(string $locale, int $id, CertificateRequest $request)
    {
        $data = [
            'type' => $request['type'],
            'status' => (bool)$request['status'],
            'title' => $request['title'],
            'languages' => $this->activeLanguages(),
        ];

        $answer = $this->certificateRepository->update($id, $data);

        // Update Files
        $this->certificateRepository->saveFiles($id, $request);

        return redirect(locale_route('certificate.show', $answer->id))->with('success', 'Certificate updated.');
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
        if (!$this->certificateRepository->delete($id)) {
            return redirect(locale_route('certificate.show', $id))->with('danger', 'Certificate not deleted.');
        }
        return redirect(locale_route('certificate.index'))->with('success', 'Certificate Deleted.');
    }
}
