<?php

namespace App\Http\Requests\Feedback;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackStore extends FormRequest
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
            'user_id' => 'sometimes|int',
            'email' => 'nullable|email',
            'subject' => 'sometimes',
            'description' => 'required',
        ];
    }
    public function attributes()
    {
        return [
            'subject' => "Заголовок"
        ];
    }
}