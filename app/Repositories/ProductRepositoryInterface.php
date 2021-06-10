<?php
/**
 *  app/Repositories/ProductRepositoryInterface.php
 *
 * Date-Time: 10.06.21
 * Time: 15:11
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories;


use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;

/**
 * Interface ProductRepositoryInterface
 * @package App\Repositories
 */
interface ProductRepositoryInterface
{

    /**
     * @param \App\Http\Requests\Admin\ProductRequest $request
     * @param array $with
     */
    public function getData(ProductRequest $request, array $with = []);

    /**
     * @param array $attributes
     *
     * @return \App\Models\Product
     */
    public function create(array $attributes): Product;

    /**
     * Update model by the given ID
     *
     * @param integer $id
     * @param array $data
     *
     * @return \App\Models\Product
     */
    public function update(int $id, array $data = []): Product;

    /**
     * @param int $id
     * @param \App\Http\Requests\Admin\ProductRequest $request
     *
     * @return \App\Models\Project
     */
    public function saveFiles(int $id,ProductRequest $request);
}