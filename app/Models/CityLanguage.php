<?php
/**
 *  app/Models/CityLanguage.php
 *
 * Date-Time: 09.06.21
 * Time: 15:06
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CityLanguage
 * @package App\Models
 * @property integer $id
 * @property integer $city_id
 * @property integer $language_id
 * @property string $title
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class CityLanguage extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'city_languages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city_id',
        'language_id',
        'title',
    ];
}
