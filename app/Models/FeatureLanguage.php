<?php
/**
 *  app/Models/FeatureLanguage.php
 *
 * Date-Time: 08.06.21
 * Time: 14:32
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FeatureLanguage
 * @package App\Models
 * @property integer $id
 * @property integer $feature_id
 * @property integer $language_id
 * @property string $title
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class FeatureLanguage extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'feature_languages';
}
