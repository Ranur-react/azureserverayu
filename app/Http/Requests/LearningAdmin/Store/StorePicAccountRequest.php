<?php

namespace App\Http\Requests\LearningAdmin\Store;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StorePicAccountRequest extends FormRequest
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
            'pic_account_manager_new' => [
                'nullable',
                'array',
//                'min:4'
            ],
            'pic_account_manager_new.*.pic_account_name_new' => [
                'nullable',
                'string',
                'max:255',
            ],
            'pic_account_manager_new.0.pic_account_name_new' => [
                'nullable',
                'string',
                'max:255'
            ],
            'pic_account_manager_new.*.pic_account_ktp_new' => [
                'nullable',
                'numeric',
                'digits_between:1,16',
            ],
            'pic_account_manager_new.0.pic_account_ktp_new' => [
                'nullable',
                'numeric',
                'digits_between:1,16',
            ],
            'pic_account_manager_new.*.pic_account_position_new' => [
                'nullable',
                'string',
                'max:255',
            ],
            'pic_account_manager_new.0.pic_account_position_new' => [
                'nullable',
                'string',
                'max:255',
            ],
            'pic_account_manager_new.*.pic_account_email_new' => [
                'nullable',
                'string',
                'email',
                'max:255',
            ],
            'pic_account_manager_new.0.pic_account_email_new' => [
                'nullable',
                'string',
                'email',
                'max:255',
            ],
            'pic_account_manager_new.*.pic_account_phone_number_new' => [
                'nullable',
                'string',
                'max:15',
            ],
            'pic_account_manager_new.0.pic_account_phone_number_new' => [
                'nullable',
                'string',
                'max:15',
            ],
        ];
    }
    public function messages()
    {
        return [

            'pic_account_manager_new.0.pic_account_name_new.max' => 'The Pic Account Manager Name must not be greater than 255 characters.',
            'pic_account_manager_new.*.pic_account_name_new.max' => 'The Pic Account Manager Name must not be greater than 255 characters.',

            'pic_account_manager_new.0.pic_account_nik_new.max' => 'The Pic Account Manager NIK must not be greater than 25 characters.',
            'pic_account_manager_new.*.pic_account_nik_new.max' => 'The Pic Account Manager NIK must not be greater than 25 characters.',

            'pic_account_manager_new.0.pic_account_position_new.max' => 'The Pic Manager Account Position must not be greater than 255 characters.',
            'pic_account_manager_new.*.pic_account_position_new.max' => 'The Pic Manager Account Position must not be greater than 255 characters.',

            'pic_account_manager_new.0.pic_account_email_new.max' => 'The Pic Account Manager Email must not be greater than 255 characters.',
            'pic_account_manager_new.*.pic_account_email_new.max' => 'The Pic Account Manager Email must not be greater than 255 characters.',

            'pic_account_manager_new.0.pic_account_email_new.email' => 'The Pic Account Manager Email must be a valid email address.',
            'pic_account_manager_new.*.pic_account_email_new.email' => 'The Pic Account Manager Email must be a valid email address.',

            'pic_account_manager_new.0.pic_account_phone_number_new.max' => 'The Pic Account Manager Phone Number must not be greater than 15 characters.',
            'pic_account_manager_new.*.pic_account_phone_number_new.max' => 'The Pic Account Manager Phone Number not be greater than 15 characters.',
        ];
    }
}
