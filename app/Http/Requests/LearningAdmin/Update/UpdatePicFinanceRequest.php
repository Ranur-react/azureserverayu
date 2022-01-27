<?php

namespace App\Http\Requests\LearningAdmin\Update;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePicFinanceRequest extends FormRequest
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
            'pic_finance' => [
                'nullable',
                'array',
//                'min:4'
            ],
            'pic_finance.*.pic_finance_name' => [
                'nullable',
                'string',
                'max:255',
            ],
            'pic_finance.0.pic_finance_name' => [
                'nullable',
                'string',
                'max:255'
            ],
            'pic_finance.*.pic_finance_nik' => [
                'nullable',
                'string',
                'nik:25',
            ],
            'pic_finance.0.pic_finance_nik' => [
                'nullable',
                'string',
                'nik:25',
            ],
            'pic_finance.*.pic_finance_position' => [
                'nullable',
                'string',
                'max:255',
            ],
            'pic_finance.0.pic_finance_position' => [
                'nullable',
                'string',
                'max:255',
            ],
            'pic_finance.*.pic_finance_email' => [
                'nullable',
                'string',
                'email',
                'max:255',
            ],
            'pic_finance.0.pic_finance_email' => [
                'nullable',
                'string',
                'email',
                'max:255',
            ],
            'pic_finance.*.pic_finance_phone_number' => [
                'nullable',
                'string',
                'max:15',
            ],
            'pic_finance.0.pic_finance_phone_number' => [
                'nullable',
                'string',
                'max:15',
            ],
        ];
    }

    public function messages()
    {
        return [
            //
            'pic_finance.0.pic_finance_name.max' => 'The Pic Finance Name must not be greater than 255 characters.',
            'pic_finance.*.pic_finance_name.max' => 'The Pic Finance Name must not be greater than 255 characters.',

            'pic_finance.0.pic_finance_nik.max' => 'The Pic Finance NIK must not be greater than 25 characters.',
            'pic_finance.*.pic_finance_nik.max' => 'The Pic Finance NIK must not be greater than 25 characters.',

            'pic_finance.0.pic_finance_position.max' => 'The Pic Finance Position must not be greater than 255 characters.',
            'pic_finance.*.pic_finance_position.max' => 'The Pic Finance Position must not be greater than 255 characters.',

            'pic_finance.0.pic_finance_email.max' => 'The Pic Finance Email must not be greater than 255 characters.',
            'pic_finance.*.pic_finance_email.max' => 'The Pic Finance Email must not be greater than 255 characters.',

            'pic_finance.0.pic_finance_email.email' => 'The Pic Finance Email must be a valid email address.',
            'pic_finance.*.pic_finance_email.email' => 'The Pic Finance Email must be a valid email address.',

            'pic_finance.0.pic_finance_email.max' => 'The Pic Finance Phone Number must not be greater than 15 characters.',
            'pic_finance.*.pic_finance_email.max' => 'The Pic Finance Phone Number not be greater than 15 characters.',

            'pic_finance.0.pic_finance_phone_number.max' => 'The Pic Finance Phone Number must not be greater than 15 characters.',
            'pic_finance.*.pic_finance_phone_number.max' => 'The Pic Finance Phone Number not be greater than 15 characters.',
        ];
    }
}
