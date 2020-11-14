<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsUpdate extends FormRequest
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
            'idCategory' => 'required|int',
            'source_id'  => 'required|int',
            'title'      => 'required|min:5',
            'desc'       => 'required|min:3',
            'img'        => 'sometimes',
            'body'       => 'required',
            'is_private' => 'required|boolean',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Для изменения :attribute не должно быть пустым',
            'boolean'  => 'Поле :attribute должно быть 0 не приватна или 1 приватна',
        ];
    }
}
