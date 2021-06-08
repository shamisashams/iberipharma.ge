<?php
/**
 *  app/Models/Feature.php
 *
 * Date-Time: 08.06.21
 * Time: 14:16
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Models;

use App\Traits\ScopeFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Feature
 * @package App\Models
 * @property integer $id
 * @property string $position
 * @property boolean $status
 * @property boolean $filter
 * @property string $type
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 *
 */
class Feature extends Model
{
    use HasFactory, softDeletes, ScopeFilter;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'features';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position',
        'status',
        'filter',
        'type'
    ];
}
