<?php
/**
 *  app/Repositories/ProjectRepositoryInterface.php
 *
 * Date-Time: 09.06.21
 * Time: 16:17
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories;


use App\Http\Requests\Admin\CertificateRequest;
use App\Models\Certificate;

/**
 * Interface ProjectRepositoryInterface
 * @package App\Repositories
 */
interface CertificateRepositoryInterface
{

    /**
     * @param \App\Http\Requests\Admin\ProjectRequest $request
     * @param array $with
     */
    public function getData(CertificateRequest $request, array $with = []);

    /**
     * @param array $attributes
     *
     * @return \App\Models\Project
     */
    public function create(array $attributes): Certificate;

    /**
     * Update model by the given ID
     *
     * @param integer $id
     * @param array $data
     *
     * @return \App\Models\Project
     */
    public function update(int $id, array $data = []): Certificate;

    /**
     * @param int $id
     * @param \App\Http\Requests\Admin\ProjectRequest $request
     *
     * @return \App\Models\Project
     */
    public function saveFiles(int $id,CertificateRequest $request);
}