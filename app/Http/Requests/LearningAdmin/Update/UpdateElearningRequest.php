<?php

namespace App\Http\Requests\LearningAdmin\Update;

use Illuminate\Foundation\Http\FormRequest;

class UpdateElearningRequest extends FormRequest
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
            'description' => 'required',
            'category' => 'required',
            'pic_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Name cannot be empty',
            'description.required' => 'The Description cannot be empty',
            'category.required' => 'The Category cannot be empty',
            'pic_name.required' => 'The Pic Name cannot be empty',
        ];
    }
}
