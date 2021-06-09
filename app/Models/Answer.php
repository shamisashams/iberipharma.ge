<?php
/**
 *  app/Models/Answer.php
 *
 * Date-Time: 09.06.21
 * Time: 11:01
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Models;

use App\Traits\ScopeFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Answer
 * @package App\Models
 * @property integer $id
 * @property integer $feature_id
 * @property string|null $position
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Answer extends Model
{
    use HasFactory, softDeletes, ScopeFilter;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'answers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'feature_id',
        'position',
        'status',
    ];

    public function getFilterScopes(): array
    {
        return [
            'id' => [
                'hasParam' => true,
                'scopeMethod' => 'id'
            ],
            'feature' => [
                'hasParam' => true,
                'scopeMethod' => 'featureLanguage'
            ],
            'status' => [
                'hasParam' => true,
                'scopeMethod' => 'status'
            ],
            'title' => [
                'hasParam' => true,
                'scopeMethod' => 'titleLanguage'
            ]
        ];
    }

    /**
     * Return relationship answer feature
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function feature(): HasOne
    {
        return $this->hasOne(Feature::class, 'feature_id');
    }

    /**
     * Return relationship answer languages
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function languages(): HasMany
    {
        return $this->hasMany(AnswerLanguage::class, 'answer_id');
    }

    /**
     * Return relationship answer language by language
     *
     * @param string|null $locale
     *
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\HasMany|object|null
     */
    public function language(string $locale = null)
    {
        if (null === $locale) {
            $locale = app()->getLocale();
        }
        return $this->languages()->where('language_id', $locale)->first();
    }


}
