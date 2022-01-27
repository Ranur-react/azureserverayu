<?php

namespace App\Http\Requests\LearningAdmin\Store;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreJobFamilyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('learning_syllabus_create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'job_family_code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'job_family_code.required' => 'The Job Family Code cannot be empty',
            'name.required' => 'The Name cannot be empty',
        ];
    }
}
