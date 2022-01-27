<?php

namespace App\Http\Requests\LearningAdmin\Store;

use Illuminate\Foundation\Http\FormRequest;

class StoreExcelFileRequest extends FormRequest
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
            'file' => 'required|mimes:csv,xls,xlsx'
        ];
    }

    public function messages()
    {
        return [
            'file.required' => 'The File cannot be empty',
            'file.mimes' => 'File must be in format csv, xls, xlsx'
        ];
    }
}
