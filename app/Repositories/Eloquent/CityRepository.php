<?php
/**
 *  app/Repositories/Eloquent/CityRepository.php
 *
 * Date-Time: 09.06.21
 * Time: 14:48
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories\Eloquent;


use App\Models\Answer;
use App\Models\City;
use App\Models\Feature;
use App\Repositories\CityRepositoryInterface;
use App\Repositories\Eloquent\Base\BaseRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class CityRepository
 * @package App\Repositories\Eloquent
 */
class CityRepository extends BaseRepository implements CityRepositoryInterface
{
    /**
     * AnswerRepository constructor.
     *
     * @param \App\Models\City $model
     */
    public function __construct(City $model)
    {
        parent::__construct($model);
    }

    /**
     * Create new model
     *
     * @param array $attributes
     *
     * @return \App\Models\City
     */
    public function create(array $attributes = []): City
    {
        try {
            DB::connection()->beginTransaction();

            $data = [
                'status' => $attributes['status'],
            ];

            $this->model = parent::create($data);

            $cityLanguages = [];

            foreach ($attributes['languages'] as $language) {
                $cityLanguages [] = [
                    'language_id' => $language['id'],
                    'title' => $attributes['title'][$language['id']],
                ];
            }

            $this->model->languages()->createMany($cityLanguages);

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
     * @return \App\Models\City
     */
    public function update(int $id, array $data = []): City
    {
        try {
            DB::connection()->beginTransaction();

            $attributes = [
                'status' => $data['status'],
            ];

            $this->model = parent::update($id, $attributes);

            foreach ($data['languages'] as $language) {
                if (null !== $this->model->language($language['id'])) {
                    $this->model->language($language['id'])->update([
                        'title' => $data['title'][$language['id']],
                    ]);
                }
            }

            DB::connection()->commit();

            return $this->model;
        } catch (\PDOException $e) {
            DB::connection()->rollBack();
        }
    }
}