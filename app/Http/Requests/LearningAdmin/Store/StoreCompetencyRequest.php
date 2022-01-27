<?php

namespace App\Http\Requests\LearningAdmin\Store;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreCompetencyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('competency_create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:128',
            'type' => "required|string|max:45|in:ROLE COMPETENCY,BEHAVIOR,TECHNICAL SKILL,KNOWLEDGE,DIGITAL CULTURE,TELKOMSEL DIGILIFE",
            'definition' => 'required|string|max:65535',
            'definition_english' => 'required|string|max:65535',
            // 'job_family' => 'required|exists:job_families,id',
            // 'sub_job_family' => 'sometimes|nullable|exists:job_families,id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Competency Name cannot be empty',
            'type.required' => 'The Competency Type cannot be empty',
            'definition.required' => 'The Competency Definition cannot be empty',
            'definition_english.required' => 'The Competency Definition In English cannot be empty',
            // 'job_family.required' => 'The Job Family cannot be empty',
        ];
    }
}
