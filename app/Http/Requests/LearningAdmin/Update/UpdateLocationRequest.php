<?php

namespace App\Http\Requests\LearningAdmin\Update;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateLocationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('master_data_edit');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'location_code' => 'nullable|string|max:64',
            'description' => 'nullable|string|max:255',
            'address_line_1' => 'nullable|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'town_or_city' => 'nullable|string|max:4',
            'postal_code' => 'nullable|numeric|digits_between:1,10',
            'region_1' => 'nullable|string|max:64',
            'admins' => 'nullable|string|max:32',
        ];
    }
}
