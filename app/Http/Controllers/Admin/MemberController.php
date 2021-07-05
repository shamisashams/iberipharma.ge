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
use App\Http\Requests\Admin\MemberRequest;
use App\Repositories\CityRepositoryInterface;
use App\Repositories\MemberRepositoryInterface;

/**
 * Class CityController
 * @package App\Http\Controllers\Admin
 */
class MemberController extends Controller
{


    /**
     * @var \App\Repositories\CityRepositoryInterface
     */
    private $memberRepository;

    /**
     * CityController constructor.
     *
     * @param \App\Repositories\CityRepositoryInterface $cityRepository
     */
    public function __construct(MemberRepositoryInterface $memberRepository) {
        // initialize memberRepository
        $this->memberRepository = $memberRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(MemberRequest $request)
    {
        return view('admin.pages.member.index', [
            'members' => $this->memberRepository->getData($request),
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
        $member = $this->memberRepository->model;

        $url = locale_route('member.store', [], false);
        $method = 'POST';

        return view('admin.pages.member.form', [
            'member' => $member,
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
    public function store(MemberRequest $request)
    {
        $data = [
            'name' => $request['name'],
            'position' => $request['position'],
            'languages' => $this->activeLanguages(),
        ];

        $city = $this->memberRepository->create($data);

        return redirect(locale_route('member.show', $city->id))->with('success', 'Member created.');
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
        $member = $this->memberRepository->findOrFail($id);

        return view('admin.pages.member.show',[
            'member' => $member,
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
        $member = $this->memberRepository->findOrfail($id);

        $url = locale_route('member.update', $id, false);

        $method = 'PUT';

        return view('admin.pages.member.form', [
            'member' => $member,
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
    public function update(string $locale,int $id,MemberRequest $request)
    {
        $data = [
            'name' => $request['name'],
            'position' => $request['position'],
            'languages' => $this->activeLanguages(),
        ];

        $member = $this->memberRepository->update($id,$data);

        return redirect(locale_route('member.show', $member->id))->with('success', 'Member updated.');
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
        if (!$this->memberRepository->delete($id)) {
            return redirect(locale_route('member.show', $id))->with('danger', 'Member not deleted.');
        }
        return redirect(locale_route('member.index'))->with('success', 'Member Deleted.');    }
}
