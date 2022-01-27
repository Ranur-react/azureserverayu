<?php

namespace App\Http\Requests\LearningAdmin\Store;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserNeedRequest extends FormRequest
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
            'name_of_program' => 'required|string|max:255',
            'objective_program' => 'required|string|max:255',
            'training_urgency' => 'required|string|max:255',
            'future_plans_after_training' => 'required|string|max:65535',
            'content' => 'required|string|max:65535',
            'partner_recommendation' => 'required|numeric|digits_between:1,20,exists:employee,id',
            'trainer' => 'required|string|max:255',
            'specialities_trainer' => 'required|string|max:255',
            'method' => 'required|string|max:255',
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',    
            'target_participants' => 'required|numeric|in:0,1',
            'import_file' => [
                'required_if:target_participants,==,1',
                'nullable',
                'mimes:xlsx, csv, xls',
            ],
            'employees' => [
                'array',
                'required_if:target_participants,==,0',
            ],
            'employees.*' => [
                'required_if:target_participants,==,0',
                'string',
                'max:25',
                'distinct',
                'exists:employee,nik',
            ],
        ];
    }

    public function messages()
    {
        return [
            'name_of_program.required' => 'The Name Of Program cannot be empty',
            'objective_program.required' => 'The Objective Of Program cannot be empty',
            'training_urgency.required' => 'The Training Urgency cannot be empty',
            'future_plans_after_training.required' => 'The Future Plans After Training cannot be empty',
            'content.required' => 'The Content cannot be empty',
            'partner_recommendation.required' => 'The Partner Recommendation cannot be empty',
            'trainer.required' => 'The Trainer cannot be empty',
            'specialities_trainer.required' => 'The Specialities Trainer cannot be empty',
            'method.required' => 'The Method cannot be empty',
            'date.required' => 'The Date cannot be empty',
            'start_time.required' => 'The Learning Scope cannot be empty',
            'end_time.required' => 'The Learning Scope cannot be empty',
            'target_participants.required' => 'The Target Participants cannot be empty',
            'import_file.required_if' => 'The Excel File cannot be empty',
            'import_file.mimes' => 'The File Format must be xlsx, csv, xls',
            'employees.required_if' => 'The Employee Participants cannot be empty',
        ];
    }
}
