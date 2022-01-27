<?php

namespace App\Http\Requests\LearningAdmin\Update;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePicAccountRequest extends FormRequest
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
            'pic_account_manager' => [
                'nullable',
                'array',
//                'min:4'
            ],
            'pic_account_manager.*.pic_account_name' => [
                'nullable',
                'string' ,
                'max:255',
            ],
            'pic_account_manager.0.pic_account_name' => [
                'nullable',
                'string',
                'max:255'
            ],
            'pic_account_manager.*.pic_account_nik' => [
                'nullable',
                'string',
                'max:25',
                ],
            'pic_account_manager.0.pic_account_nik' => [
                'nullable',
                'string',
                'max:25',
            ],
            'pic_account_manager.*.pic_account_position' => [
                'nullable' ,
                'string' ,
                'max:255',
                ],
            'pic_account_manager.0.pic_account_position' => [
                'nullable',
                'string',
                'max:255',
            ],
            'pic_account_manager.*.pic_account_email' => [
                'nullable',
                'string' ,
                'email',
                'max:255',
                ],
            'pic_account_manager.0.pic_account_email' => [
                'nullable' ,
                'string' ,
                'email',
                'max:255',
            ],
            'pic_account_manager.*.pic_account_phone_number' => [
                'nullable',
                'string',
                'max:15',
                ],
            'pic_account_manager.0.pic_account_phone_number' => [
                'nullable',
                'string',
                'max:15',
            ],
        ];
    }
    public function messages()
    {
        return [
            'pic_account_manager.0.pic_account_name.max' => 'The Pic Account Manager Name must not be greater than 255 characters.',
            'pic_account_manager.*.pic_account_name.max' => 'The Pic Account Manager Name must not be greater than 255 characters.',

            'pic_account_manager.0.pic_account_nik.max' => 'The Pic Account Manager NIK must not be greater than 25 characters.',
            'pic_account_manager.*.pic_account_nik.max' => 'The Pic Account Manager NIK must not be greater than 25 characters.',

            'pic_account_manager.0.pic_account_position.max' => 'The Pic Account Manager Position must not be greater than 255 characters.',
            'pic_account_manager.*.pic_account_position.max' => 'The Pic Account Manager Position must not be greater than 255 characters.',

            'pic_account_manager.0.pic_account_email.max' => 'The Pic Account Manager Email must not be greater than 255 characters.',
            'pic_account_manager.*.pic_account_email.max' => 'The Pic Account Manager Email must not be greater than 255 characters.',

            'pic_account_manager.0.pic_account_email.email' => 'The Pic Account Manager Email must be a valid email address.',
            'pic_account_manager.*.pic_account_email.email' => 'The Pic Account Manager Email must be a valid email address.',

            'pic_account_manager.0.pic_account_phone_number.max' => 'The Pic Account Manager Phone Number must not be greater than 15 characters.',
            'pic_account_manager.*.pic_account_phone_number.max' => 'The Pic Account Manager Phone Number not be greater than 15 characters.',
        ];
    }
}
