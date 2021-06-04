<?php
/**
 *  app/Repositories/Eloquent/Base/BaseRepository.php
 *
 * Date-Time: 04.06.21
 * Time: 09:41
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories\Eloquent\Base;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 * @package App\Repositories\Eloquent\Base
 */
class BaseRepository implements EloquentRepositoryInterface
{

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getData($request)
    {
        $data = $this->model->filter($request);

        $perPage = 10;

        if ($request->filled('per_page')) {
            $perPage = $request->per_page;
        }

        return $data->paginate($perPage);
    }
}
