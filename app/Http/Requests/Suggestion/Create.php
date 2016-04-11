<?php

namespace App\Http\Requests\Suggestion;

use App\Http\Requests\Request;

/**
 * Class Create
 *
 * @package App\Http\Requests\Suggestion
 */
class Create extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
        return [
            'word' => 'required|string|max:' . config('general.maxWordSize', 100),
        ];
    }
}
