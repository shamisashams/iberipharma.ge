<?php
/**
 *  app/Models/City.php
 *
 * Date-Time: 09.06.21
 * Time: 14:42
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * @package App\Models
 * @property integer $id
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class City extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status',
    ];
}
