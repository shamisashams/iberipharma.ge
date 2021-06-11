<?php
/**
 *  app/Repositories/Eloquent/ProductRepository.php
 *
 * Date-Time: 10.06.21
 * Time: 15:13
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Repositories\Eloquent;


use App\Models\Product;
use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Support\Facades\DB;

/**
 * Class CityRepository
 * @package App\Repositories\Eloquent
 */
class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{

    /**
     * ProductRepository constructor.
     *
     * @param \App\Models\Product $model
     */
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    /**
     * Create new model
     *
     * @param array $attributes
     *
     * @return \App\Models\Product
     */
    public function create(array $attributes = []): Product
    {
        try {
            DB::connection()->beginTransaction();

            $data = [
                'category_id' => $attributes['category_id'],
                'status' => $attributes['status'],
                'slug' => $attributes['slug'],
                'price' => $attributes['price']
            ];

            $this->model = parent::create($data);

            $productLanguages = [];

            foreach ($attributes['languages'] as $language) {
                $productLanguages [] = [
                    'language_id' => $language['id'],
                    'meta_title' => $attributes['meta_title'][$language['id']],
                    'meta_description' => $attributes['meta_description'][$language['id']],
                    'meta_keyword' => $attributes['meta_keyword'][$language['id']],
                    'title' => $attributes['title'][$language['id']],
                    'description' => $attributes['description'][$language['id']],
                ];
            }

            $this->model->languages()->createMany($productLanguages);

            if ($attributes['feature']) {
                foreach ($attributes['feature'] as $key => $feature) {
                    if (count($feature)) {
                        $this->model->features()->create([
                            'feature_id' => $key,
                            'answers' => array_map('intval',$feature)
                        ]);
                    }
                }
            }

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
     * @return \App\Models\Product
     */
    public function update(int $id, array $data = []): Product
    {
        try {
            DB::connection()->beginTransaction();

            $attributes = [
                'city_id' => $data['city_id'],
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