<?php
/**
 *  app/Models/ProductFeature.php
 *
 * Date-Time: 10.06.21
 * Time: 11:09
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
use Staudenmeir\EloquentJsonRelations\Relations\BelongsToJson;

/**
 * Class ProductFeature
 * @package App\Models
 * @property integer $id
 * @property integer $feature_id
 * @property integer $product_id
 * @property string $answers
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class ProductFeature extends Model
{
    use HasFactory, softDeletes, HasJsonRelationships;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_features';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'feature_id',
        'product_id',
        'answers'
    ];

    /** @var array */
    protected $casts = ['answers' => 'array'];

    /**
     * Return relationship answer feature
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function feature(): HasOne
    {
        return $this->hasOne(Feature::class, 'id', 'feature_id');
    }

    /**
     * Return relationship feature answers
     *
     * @return \Staudenmeir\EloquentJsonRelations\Relations\BelongsToJson
     */
    public function answers(): BelongsToJson
    {
        return $this->belongsToJson(Answer::class, 'answers');
    }
}
