<?php
/**
 *  app/Repositories/Eloquent/FeatureRepository.php
 *
 * Date-Time: 08.06.21
 * Time: 14:36
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories\Eloquent;


use App\Models\Feature;
use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\FeatureRepositoryInterface;

/**
 * Class FeatureRepository
 * @package App\Repositories\Eloquent
 */
class FeatureRepository extends BaseRepository implements FeatureRepositoryInterface
{
    /**
     * FeatureRepository constructor.
     *
     * @param \App\Models\Feature $model
     */
    public function __construct(Feature $model)
    {
        parent::__construct($model);
    }
}