<?php
/**
 *  app/Models/AnswerLanguage.php
 *
 * Date-Time: 09.06.21
 * Time: 11:15
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AnswerLanguage
 * @package App\Models
 * @property integer $id
 * @property integer $feature_id
 * @property integer $language_id
 * @property string $title
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class AnswerLanguage extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'answer_languages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'answer_id',
        'language_id',
        'title',
    ];
}
