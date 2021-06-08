<?php
/**
 *  app/Repositories/CategoryRepositoryInterface.php
 *
 * Date-Time: 07.06.21
 * Time: 17:03
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories;


use App\Http\Requests\Admin\FeatureRequest;
use App\Models\Feature;

/**
 * Interface CategoryRepositoryInterface
 * @package App\Repositories
 */
interface FeatureRepositoryInterface
{

    /**
     * @param \App\Http\Requests\Admin\FeatureRequest $request
     * @param array $with
     */
    public function getData(FeatureRequest $request, array $with = []);

    /**
     * @param array $attributes
     *
     * @return \App\Models\Category
     */
    public function create(array $attributes): Feature;

}