<?php
/**
 *  app/Repositories/Eloquent/AnswerRepository.php
 *
 * Date-Time: 09.06.21
 * Time: 11:24
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories\Eloquent;


use App\Models\Answer;
use App\Models\Feature;
use App\Repositories\AnswerRepositoryInterface;
use App\Repositories\Eloquent\Base\BaseRepository;

/**
 * Class FeatureRepository
 * @package App\Repositories\Eloquent
 */
class AnswerRepository extends BaseRepository implements AnswerRepositoryInterface
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

    /**
     * Create new model
     *
     * @param array $attributes
     *
     * @return \App\Models\Answer
     */
    public function create(array $attributes = []): Answer
    {

    }

    /**
     * Create new model
     *
     * @param int $id
     * @param array $data
     *
     * @return Feature
     */
    public function update(int $id, array $data = []): Answer
    {

    }
}