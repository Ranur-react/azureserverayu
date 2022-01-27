<?php

namespace App\Http\Requests\LearningAdmin\Update;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateCompetencyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('competency_edit');
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
            'status' => 'required|in:0,1',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Competency Name cannot be empty',
            'type.required' => 'The Competency Type cannot be empty',
            'definition.required' => 'The Competency Definition cannot be empty',
            'definition_english.required' => 'The Competency Definition In English cannot be empty',
            'status.required' => 'The Competency Status cannot be empty',
        ];
    }
}
