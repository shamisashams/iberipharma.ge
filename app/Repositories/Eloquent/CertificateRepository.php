<?php
/**
 *  app/Repositories/Eloquent/ProjectRepository.php
 *
 * Date-Time: 09.06.21
 * Time: 16:18
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories\Eloquent;


use App\Models\Certificate;
use App\Models\Project;
use App\Repositories\CertificateRepositoryInterface;
use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\ProjectRepositoryInterface;
use Illuminate\Support\Facades\DB;

/**
 * Class CityRepository
 * @package App\Repositories\Eloquent
 */
class CertificateRepository extends BaseRepository implements CertificateRepositoryInterface
{
    /**
     * ProjectRepository constructor.
     *
     * @param \App\Models\Project $model
     */
    public function __construct(Certificate $model)
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
    public function create(array $attributes = []): Certificate
    {
        try {
            DB::connection()->beginTransaction();
            $data = [
                'type' => $attributes['type'],
                'status' => $attributes['status']
            ];

            $this->model = parent::create($data);

            $projectLanguages = [];

            foreach ($attributes['languages'] as $language) {
                $projectLanguages [] = [
                    'language_id' => $language['id'],
                    'title' => $attributes['title'][$language['id']],
                ];
            }
            $this->model->languages()->createMany($projectLanguages);

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
    public function update(int $id, array $data = []): Certificate
    {
        try {
            DB::connection()->beginTransaction();

            $attributes = [
                'type' => $data['type'],
                'status' => $data['status']
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