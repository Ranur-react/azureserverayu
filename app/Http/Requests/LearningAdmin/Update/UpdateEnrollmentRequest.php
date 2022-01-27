<?php

namespace App\Http\Requests\LearningAdmin\Update;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEnrollmentElearningRequest extends FormRequest
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
            'start_date' => 'required|date|before:end_date',
            'end_date' => 'required|date|after:start_date',
        ];
    }

    public function messages()
    {
        return [
            'start_date.required' => 'The Start Date cannot be empty',
            'end_date.required' => 'The End Date cannot be empty',
        ];
    }
}
