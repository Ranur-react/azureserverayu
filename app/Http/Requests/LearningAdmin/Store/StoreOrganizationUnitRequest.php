<?php

namespace App\Http\Requests\LearningAdmin\Store;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreOrganizationUnitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('master_data_create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'location_id' => 'nullable|numeric|exists:location,location_id',
            'date_from' => 'nullable|date|before:date_to',
            'date_to' => 'nullable|date|after:date_from',
            'name' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:32',
        ];
    }
}
