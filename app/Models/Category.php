<?php
/**
 *  app/Models/Category.php
 *
 * Date-Time: 07.06.21
 * Time: 15:56
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Models;

use App\Traits\ScopeFilter;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * @package App\Models
 * @property integer $id
 * @property integer $parent_id
 * @property string $slug
 * @property string $position
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Category extends Model
{
    use HasFactory, softDeletes, ScopeFilter;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'position',
        'status'
    ];

    public function getFilterScopes(): array
    {
        return [
            'id' => [
                'hasParam' => true,
                'scopeMethod' => 'id'
            ],
            'slug' => [
                'hasParam' => true,
                'scopeMethod' => 'slug'
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
     * Return relationship category languages
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function languages(): HasMany
    {
        return $this->hasMany(CategoryLanguage::class, 'category_id');
    }

    /**
     * Return relationship category language by language
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class, 'feature_categories');
    }
}
