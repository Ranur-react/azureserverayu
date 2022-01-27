<?php

namespace App\Http\Requests\LearningAdmin\Store;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassSectionRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'delivery_method' => 'required',
            'date_time' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Name cannot be empty',
            'delivery_method.required' => 'The Delivery Method cannot be empty',
            'date_time.required' => 'The Date & Time cannot be empty',
        ];
    }
}
