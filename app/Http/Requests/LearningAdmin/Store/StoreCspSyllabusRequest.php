<?php

namespace App\Http\Requests\LearningAdmin\Store;

use App\Models\Syllabus;
use Arr;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCspSyllabusRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('csp_edit');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->route('id');
        return [
            "syllabus" => "required|array",
            'syllabus.*.id' =>  [
                'required',
                'numeric',
                'distinct',
                'exists:syllabuses,id',
                Rule::unique('csp_syllabus', "syllabus_id")->where(function ($query) use ($id){
                    return $query->where('csp_id', $id);
                })
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
            'syllabus.*.id.unique' => 'Syllabus :attribute is already in this csp',
        ];
    }
}
