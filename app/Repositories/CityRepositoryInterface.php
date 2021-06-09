<?php
/**
 *  app/Repositories/CityRepositoryInterface.php
 *
 * Date-Time: 09.06.21
 * Time: 14:46
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories;


use App\Http\Requests\Admin\CityRequest;
use App\Models\City;

/**
 * Interface CityRepositoryInterface
 * @package App\Repositories
 */
interface CityRepositoryInterface
{

    /**
     * @param \App\Http\Requests\Admin\CityRequest $request
     * @param array $with
     */
    public function getData(CityRequest $request, array $with = []);

    /**
     * @param array $attributes
     *
     * @return \App\Models\City
     */
    public function create(array $attributes): City;

    /**
     * Update model by the given ID
     *
     * @param integer $id
     * @param array $data
     *
     * @return \App\Models\City
     */
    public function update(int $id, array $data = []): City;
}