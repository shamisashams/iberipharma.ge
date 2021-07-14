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
use App\Models\Member;
use App\Repositories\CityRepositoryInterface;
use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\MemberRepositoryInterface;
use Illuminate\Support\Facades\DB;

/**
 * Class CityRepository
 * @package App\Repositories\Eloquent
 */
class MemberRepository extends BaseRepository implements MemberRepositoryInterface
{
    /**
     * AnswerRepository constructor.
     *
     * @param \App\Models\City $model
     */
    public function __construct(Member $model)
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
    public function create(array $attributes = []): Member
    {
        try {
            DB::connection()->beginTransaction();

            $data = [];

            $this->model = parent::create($data);
            $memberLanguages = [];

            foreach ($attributes['languages'] as $language) {
                $memberLanguages [] = [
                    'language_id' => $language['id'],
                    'name' => $attributes['name'][$language['id']],
                    'position' => $attributes['position'][$language['id']],
                    'contact' => $attributes['contact'][$language['id']],
                ];
            }
            $this->model->languages()->createMany($memberLanguages);
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
    public function update(int $id, array $data = []): Member
    {
        try {
            DB::connection()->beginTransaction();

            $attributes = [];

            $this->model = parent::update($id, $attributes);

            foreach ($data['languages'] as $language) {
                if (null !== $this->model->language($language['id'])) {
                    $this->model->language($language['id'])->update([
                        'name' => $data['name'][$language['id']],
                        'position' => $data['position'][$language['id']],
                        'contact' => $data['contact'][$language['id']],
                    ]);
                } else {
                    $this->model->language($language['id'])->create([
                        'language_id' => $language['id'],
                        'name' => $data['name'][$language['id']],
                        'position' => $data['position'][$language['id']],
                        'contact' => $data['contact'][$language['id']],
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