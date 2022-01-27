<?php

namespace App\Http\Requests\LearningAdmin\Store;

use App\Models\Syllabus;
use Arr;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreKurikulumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('curriculum_edit');
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
            "syllabus" => "required|array",
            'syllabus.*.id' =>  [
                'required',
                'numeric',
                'distinct',
                'exists:syllabuses,id',
            ],
        ];
    }

    public function attributes()
    {
        $attributes = [
            'syllabus.*.id' => '', // default value
        ];

        $syllabusesData = $this->get( 'syllabus', [] );
        $syllabusIds = Arr::pluck($syllabusesData, 'id');

        $syllabuses = Syllabus::findMany( $syllabusIds );

        if ($syllabuses->isEmpty()) {
            return $attributes;
        }

        $attributes = collect( $syllabusesData )
            ->mapWithKeys( function ( $syllabusesData, $index ) use ( $syllabuses ) {
                $syllabusId = Arr::get( $syllabusesData, 'id' );
                $syllabus   = $syllabuses->where( 'id', $syllabusId )->first();

                return [ "syllabus.{$index}.id" => optional( $syllabus )->training_name ];
            } )
            ->merge( $attributes )
            ->toArray();

        return $attributes;
    }

    public function messages()
    {
        return [
            'syllabus.*.id.distinct' => 'Syllabus :attribute has a duplicate value',
        ];
    }
}
