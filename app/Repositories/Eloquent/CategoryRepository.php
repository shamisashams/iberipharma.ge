<?php
/**
 *  app/Repositories/Eloquent/CategoryRepository.php
 *
 * Date-Time: 07.06.21
 * Time: 17:02
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories\Eloquent;


use App\Models\Category;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\Eloquent\Base\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class LanguageRepository
 * @package App\Repositories\Eloquent
 */
class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    /**
     * CategoryRepository constructor.
     *
     * @param \App\Models\Category $model
     */
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    /**
     * Create new model
     *
     * @param array $attributes
     *
     * @return Category
     */
    public function create(array $attributes = []): Category
    {
        try {
            DB::connection()->beginTransaction();
            $data = [
                'slug' => $attributes['slug'],
                'position' => $attributes['position'],
                'status' => $attributes['status'],
            ];

            $this->model = parent::create($data);

            $categoryLanguages = [];

            foreach ($attributes['languages'] as $language) {
                $categoryLanguages [] = [
                    'language_id' => $language['id'],
                    'title' => $attributes['title'][$language['id']],
                    'description' => $attributes['description'][$language['id']]
                ];
            }

            $this->model->languages()->createMany($categoryLanguages);

            DB::connection()->commit();

            return $this->model;

        } catch (\PDOException $e) {
            // Woopsy
            DB::connection()->rollBack();
        }
    }

    /**
     * Create new model
     *
     * @param int $id
     * @param array $data
     *
     * @return Category
     */
    public function update(int $id, array $data = []): Category
    {
        try {
            DB::connection()->beginTransaction();
            $attributes = [
                'slug' => $data['slug'],
                'position' => $data['position'],
                'status' => $data['status'],
            ];

            $this->model = parent::update($id, $attributes);

            foreach ($data['languages'] as $language) {
                if (null !== $this->model->language($language['id'])) {
                    $this->model->language($language['id'])->update([
                        'title' => $data['title'][$language['id']],
                        'description' => $data['description'][$language['id']]
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