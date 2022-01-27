<?php

namespace App\Http\Requests\LearningAdmin\Update;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClassVideoConferenceRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'platform' => 'required|string',
            'url' => 'required|url'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Name cannot be empty',
            'platfrom.required' => 'The Platform cannot be empty',
            'url.required' => 'The URL cannot be empty',
        ];
    }
}
