<?php
/**
 *  app/Repositories/CityRepositoryInterface.php
 *
 * Date-Time: 09.06.21
 * Time: 14:46
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories;


use App\Http\Requests\Admin\BlogRequest;
use App\Http\Requests\Admin\WellnessRequest;
use App\Models\Blog;
use App\Models\Wellness;

/**
 * Interface CityRepositoryInterface
 * @package App\Repositories
 */
interface WellnessRepositoryInterface
{

    /**
     * @param \App\Http\Requests\Admin\MemberRequest $request
     * @param array $with
     */
    public function getData(WellnessRequest $request, array $with = []);

    /**
     * @param array $attributes
     *
     * @return \App\Models\Member
     */
    public function create(array $attributes): Wellness;

    /**
     * Update model by the given ID
     *
     * @param integer $id
     * @param array $data
     *
     * @return \App\Models\Member
     */
    public function update(int $id, array $data = []): Wellness;
}