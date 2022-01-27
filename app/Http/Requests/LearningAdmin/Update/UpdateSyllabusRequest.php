<?php

namespace App\Http\Requests\LearningAdmin\Update;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateSyllabusRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('learning_syllabus_edit');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'training_name' => 'required|string|max:255',
            'training_summary' => 'required|string|max:65535',
            'levels' => 'required|exists:levels,id',
            'statuses' => 'required|exists:statuses,id',
            'locations' => 'required|exists:location,location_id',
            'units' => 'required|exists:organization_units,organization_id',
            'training_background' => 'required|string|max:65535',
            'training_description' => 'required|string|max:65535',
            'skills_will_you_gain' => 'required|exists:prf_competency_catalog,id',
            'learning_scope' => 'required|string|max:65535',
            'partner_recommendation' => 'required|exists:vendors,id',
        ];
    }

    public function messages()
    {
        return [
            'training_name.required' => 'The Training Name cannot be empty',
            'training_summary.required' => 'The Training Summary cannot be empty',
            'levels.required' => 'The Level cannot be empty',
            'statuses.required' => 'The Status cannot be empty',
            'locations.required' => 'The Location cannot be empty',
            'units.required' => 'The Unit cannot be empty',
            'training_background.required' => 'The Training Background cannot be empty',
            'training_description.required' => 'The Training Description cannot be empty',
            'skills_will_you_gain.required' => 'The Skills Will You Gain cannot be empty',
            'learning_scope.required' => 'The Learning Scope cannot be empty',
            'partner_recommendation.required' => 'The Partner Recommendation cannot be empty',
            'levels.exists' => 'Not an existing ID',
            'statuses.exists' => 'Not an existing ID',
            'locations.exists' => 'Not an existing ID',
            'units.exists' => 'Not an existing ID',
            'skills_will_you_gain.exists' => 'Not an existing ID',
            'partner_recommendation.exists' => 'Not an existing ID',
        ];
    }
}
