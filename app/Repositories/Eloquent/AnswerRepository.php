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
use Illuminate\Support\Facades\DB;

/**
 * Class FeatureRepository
 * @package App\Repositories\Eloquent
 */
class AnswerRepository extends BaseRepository implements AnswerRepositoryInterface
{
    /**
     * AnswerRepository constructor.
     *
     * @param \App\Models\Answer $model
     */
    public function __construct(Answer $model)
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
        try {
            DB::connection()->beginTransaction();

            $data = [
                'feature_id' => $attributes['feature_id'],
                'position' => $attributes['position'],
                'status' => $attributes['status'],
            ];

            $this->model = parent::create($data);

            $answerLanguages = [];

            foreach ($attributes['languages'] as $language) {
                $answerLanguages [] = [
                    'language_id' => $language['id'],
                    'title' => $attributes['title'][$language['id']],
                ];
            }

            $this->model->languages()->createMany($answerLanguages);

            DB::connection()->commit();

            return $this->model;
        } catch (\PDOException $e) {
            DB::connection()->rollBack();
        }
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