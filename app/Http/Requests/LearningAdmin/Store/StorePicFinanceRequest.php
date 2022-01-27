<?php

namespace App\Http\Requests\LearningAdmin\Store;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StorePicFinanceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('vendor_edit');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pic_finance_new' => [
                'nullable',
                'array',
//                'min:4'
            ],
            'pic_finance_new.*.pic_finance_name_new' => [
                'nullable',
                'string',
                'max:255',
            ],
            'pic_finance_new.0.pic_finance_name_new' => [
                'nullable',
                'string',
                'max:255'
            ],
            'pic_finance_new.*.pic_finance_nik_new' => [
                'nullable',
                'string',
                'max:25',
            ],
            'pic_finance_new.0.pic_finance_nik_new' => [
                'nullable',
                'string',
                'max:25',
            ],
            'pic_finance_new.*.pic_finance_position_new' => [
                'nullable',
                'string',
                'max:255',
            ],
            'pic_finance_new.0.pic_finance_position_new' => [
                'nullable',
                'string',
                'max:255',
            ],
            'pic_finance_new.*.pic_finance_email_new' => [
                'nullable',
                'string',
                'email',
                'max:255',
            ],
            'pic_finance_new.0.pic_finance_email_new' => [
                'nullable',
                'string',
                'email',
                'max:255',
            ],
            'pic_finance_new.*.pic_finance_phone_number_new' => [
                'nullable',
                'string',
                'max:15',
            ],
            'pic_finance_new.0.pic_finance_phone_number_new' => [
                'nullable',
                'string',
                'max:15',
            ],
        ];
    }

    public function messages()
    {
        return [
            'pic_finance_new.0.pic_finance_name_new.max' => 'The Pic Finance Name must not be greater than 255 characters.',
            'pic_finance_new.*.pic_finance_name_new.max' => 'The Pic Finance Name must not be greater than 255 characters.',

            'pic_finance_new.0.pic_finance_nik_new.max' => 'The Pic Finance NIK must not be greater than 25 characters.',
            'pic_finance_new.*.pic_finance_nik_new.max' => 'The Pic Finance NIK must not be greater than 25 characters.',

            'pic_finance_new.0.pic_finance_position_new.max' => 'The Pic Finance Position must not be greater than 255 characters.',
            'pic_finance_new.*.pic_finance_position_new.max' => 'The Pic Finance Position must not be greater than 255 characters.',

            'pic_finance_new.0.pic_finance_email_new.max' => 'The Pic Finance Email must not be greater than 255 characters.',
            'pic_finance_new.*.pic_finance_email_new.max' => 'The Pic Finance Email must not be greater than 255 characters.',

            'pic_finance_new.0.pic_finance_email_new.email' => 'The Pic Finance Email must be a valid email address.',
            'pic_finance_new.*.pic_finance_email_new.email' => 'The Pic Finance Email must be a valid email address.',

            'pic_finance_new.0.pic_finance_email_new.max' => 'The Pic Finance Phone Number must not be greater than 15 characters.',
            'pic_finance_new.*.pic_finance_email_new.max' => 'The Pic Finance Phone Number not be greater than 15 characters.',

            'pic_finance_new.0.pic_finance_phone_number_new.max' => 'The Pic Finance Phone Number must not be greater than 15 characters.',
            'pic_finance_new.*.pic_finance_phone_number_new.max' => 'The Pic Finance Phone Number not be greater than 15 characters.',
        ];
    }
}
