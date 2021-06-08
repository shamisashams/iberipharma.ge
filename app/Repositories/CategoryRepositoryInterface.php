<?php
/**
 *  app/Repositories/CategoryRepositoryInterface.php
 *
 * Date-Time: 07.06.21
 * Time: 17:03
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories;


use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;

/**
 *  app/Repositories/CategoryRepositoryInterface.php
 *
 * Date-Time: 07.06.21
 * Time: 17:03
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
interface CategoryRepositoryInterface
{

    /**
     * @param \App\Http\Requests\Admin\CategoryRequest $request
     * @param array $with
     */
    public function getData(CategoryRequest $request, array $with = []);

    /**
     * @param array $attributes
     *
     * @return \App\Models\Category
     */
    public function create(array $attributes): Category;

    /**
     * Update model by the given ID
     *
     * @param integer $id
     * @param array $data
     *
     * @return mixed
     */
    public function update(int $id, array $data = []): Category;
}