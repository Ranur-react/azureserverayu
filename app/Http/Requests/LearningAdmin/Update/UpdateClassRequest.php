<?php

namespace App\Http\Requests\LearningAdmin\Update;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClassRequest extends FormRequest
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
            'level' => 'required',
            'start_date' => 'required|date|before:end_date',
            'end_date' => 'required|date|after:start_date',
            'pic_name' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Name cannot be empty',
            'description.required' => 'The Description cannot be empty',
            'level.required' => 'The Level cannot be empty',
            'start_date.required' => 'The Start Date cannot be empty',
            'end_date.required' => 'The End Date cannot be empty',
            'pic_name.required' => 'The PIC Name cannot be empty',
        ];
    }
}
