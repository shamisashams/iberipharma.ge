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
}