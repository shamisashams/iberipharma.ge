<?php
/**
 *  app/Repositories/AnswerRepositoryInterface.php
 *
 * Date-Time: 09.06.21
 * Time: 11:22
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories;


use App\Http\Requests\Admin\AnswerRequest;
use App\Models\Answer;

/**
 * Interface FeatureRepositoryInterface
 * @package App\Repositories
 */
interface AnswerRepositoryInterface
{

    /**
     * @param \App\Http\Requests\Admin\AnswerRequest $request
     * @param array $with
     */
    public function getData(AnswerRequest $request, array $with = []);

    /**
     * @param array $attributes
     *
     * @return \App\Models\Answer
     */
    public function create(array $attributes): Answer;

    /**
     * Update model by the given ID
     *
     * @param integer $id
     * @param array $data
     *
     * @return \App\Models\Answer
     */
    public function update(int $id, array $data = []): Answer;
}