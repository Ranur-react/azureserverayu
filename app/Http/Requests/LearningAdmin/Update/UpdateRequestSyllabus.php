<?php

namespace App\Http\Requests\LearningAdmin\Update;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequestSyllabus extends FormRequest
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
            'training_name' => 'required|string|max:255',
            'training_summary' => 'required|string|max:65535',
            'level' => ['required',
                Rule::exists('levels', 'id')
                ],
            'status' => ['required',
                Rule::exists('statuses', 'id')
            ],
            'lokasi_kerja' => ['required',
                Rule::exists('locations', 'id')
            ],
            'unit' => ['required',
                Rule::exists('units', 'id')
            ],
            'training_background' => 'required|string|max:65535',
            'training_description' => 'required|string|max:65535',
            'skills_will_you_gain' => 'required|exists:competencies,id',
            'learning_scope' => 'required|string|max:65535',
            'partner_recommendation' => 'required|exists:vendors,id',
            'job_family' =>  ['required',
                Rule::exists('job_families', 'id')->where('level', 0)
            ],
            'sub_job_family' =>  ['nullable',
                Rule::exists('job_families', 'id')->where('level', 1)
            ],
        ];
    }

    public function messages()
    {
        return [
            'training_name.required' => 'The Training Name cannot be empty',
            'training_summary.required' => 'The Training Summary cannot be empty',
            'level.required' => 'The Level cannot be empty',
            'status.required' => 'The Status cannot be empty',
            'lokasi_kerja.required' => 'The Location cannot be empty',
            'unit.required' => 'The Unit cannot be empty',
            'training_background.required' => 'The Training Background cannot be empty',
            'training_description.required' => 'The Training Description cannot be empty',
            'skills_will_you_gain.required' => 'The Skills Will You Gain cannot be empty',
            'learning_scope.required' => 'The Learning Scope cannot be empty',
            'partner_recommendation.required' => 'The Partner Recommendation cannot be empty',
            'status_syllabus.required' => 'The Status Syllabus cannot be empty',
            'skills_will_you_gain.exists' => 'Not an existing ID',
            'partner_recommendation.exists' => 'Not an existing ID',
        ];
    }
}
