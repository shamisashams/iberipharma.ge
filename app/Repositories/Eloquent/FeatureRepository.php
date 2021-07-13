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
use Illuminate\Support\Facades\DB;

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

    /**
     * Create new model
     *
     * @param array $attributes
     *
     * @return \App\Models\Feature
     */
    public function create(array $attributes = []): Feature
    {
        try {
            DB::connection()->beginTransaction();
            $data = [
                'type' => $attributes['type'],
                'position' => $attributes['position'],
                'status' => $attributes['status'],
                'search' => $attributes['search'],
            ];

            $this->model = parent::create($data);
            $featureLanguages = [];

            foreach ($attributes['languages'] as $language) {
                $featureLanguages [] = [
                    'language_id' => $language['id'],
                    'title' => $attributes['title'][$language['id']],
                ];
            }

            $this->model->languages()->createMany($featureLanguages);

            $this->model->categories()->attach($attributes['categories']);

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
    public function update(int $id, array $data = []): Feature
    {
        try {

            DB::connection()->beginTransaction();
            $attributes = [
                'type' => $data['type'],
                'position' => $data['position'],
                'status' => $data['status'],
                'search' => $data['search'],
            ];


            $this->model = parent::update($id, $attributes);

            foreach ($data['languages'] as $language) {
                if (null !== $this->model->language($language['id'])) {
                    $this->model->language($language['id'])->update([
                        'title' => $data['title'][$language['id']],
                    ]);
                } else {
                    $this->model->language($language['id'])->create([
                        'language_id' => $language['id'],
                        'title' => $data['title'][$language['id']],
                    ]);
                }
            }

            // Remove all categories
            $this->model->categories()->detach();
            // Add new categories
            $this->model->categories()->attach($data['categories']);


            DB::connection()->commit();

            return $this->model;


        } catch (\PDOException $e) {
            DB::connection()->rollBack();
        }
    }
}