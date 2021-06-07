<?php
/**
 *  app/Http/Requests/Admin/TranslationRequest.php
 *
 * Date-Time: 07.06.21
 * Time: 09:48
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Requests\Admin;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class TranslationRequest
 * @package App\Http\Requests\Admin
 */
class TranslationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Check if method is get,fields are nullable.
        $isRequired = $this->method() === 'GET' ? 'nullable' : 'required';

        return [
            'group' => $isRequired . '|string|max:255',
            'key' => $isRequired . '|max:2|min:2',
        ];
    }

    public function languages()
    {
        return $this->hasManyJson(Language::class, '');
    }
}
