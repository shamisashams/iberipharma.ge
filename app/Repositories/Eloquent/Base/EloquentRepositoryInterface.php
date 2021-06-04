<?php
/**
 *  app/Repositories/Eloquent/Base/EloquentRepositoryInterface.php
 *
 * Date-Time: 04.06.21
 * Time: 09:41
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories\Eloquent\Base;

use Illuminate\Database\Eloquent\Model;

/**
 * Interface EloquentRepositoryInterface
 * @package App\Repositories\Eloquent\Base
 */
interface EloquentRepositoryInterface
{

    /**
     * @param $request
     *
     * @return mixed
     */
    public function getData($request);

    /**
     * @param array $attributes
     *
     * @return Model
     */
    public function create(array $attributes): Model;
}
