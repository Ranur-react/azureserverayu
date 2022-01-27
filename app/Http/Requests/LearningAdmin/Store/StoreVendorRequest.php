<?php

namespace App\Http\Requests\LearningAdmin\Store;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreVendorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('vendor_create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pt_name' => 'nullable|string|max:64',
            'partner_name' => 'nullable|string|max:64',
            'supplier_number' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:65535',
            'postal_code' => 'nullable|string|max:16',
            'telephone_number' => 'nullable|string|max:15',
            'ext' => 'nullable|string|max:16',
            'fax' => 'nullable|string|max:16',
            'email' => 'nullable|string|email|max:255',
            'phone_number' => 'nullable|string|max:15',
            'category' => 'nullable|string|max:65535',
            'cluster_1' => 'nullable|string|max:65535',
            'cluster_2_primary' => 'nullable|string|max:65535',
            'cluster_2_optional' => 'nullable|string|max:65535',
            'status' => 'required|numeric|exists:vendors_statuses,id',
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
            'pic_finance' => [
                'nullable',
                'array',
//                'min:4'
            ],
            'pic_finance.*.pic_finance_name' => [
                'nullable',
                'string' ,
                'max:255'
            ],
            'pic_finance.0.pic_finance_name' => [
                'nullable',
                'string' ,
                'max:255'
            ],
            'pic_finance.*.pic_finance_nik' => [
                'nullable',
                'string',
                'max:25',
            ],
            'pic_finance.0.pic_finance_nik' => [
                'nullable',
                'string',
                'max:25',
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
                'string' ,
                'email',
                'max:255',
            ],
            'pic_finance.0.pic_finance_email' => [
                'nullable' ,
                'string' ,
                'email',
                'max:255',
            ],
            'pic_finance.*.pic_finance_phone_number' => [
                'nullable',
                'string',
                'max:15',
            ],
            'pic_finance.0.pic_finance_phone_number' => [
                'nullable' ,
                'string' ,
                'max:15',
            ],
        ];
    }

    public function messages()
    {
        return [
            'pt_name.max' => 'The PT Name must not be greater than 64 characters.',
            'partner_name.max' => 'The Partner Name must not be greater than 64 characters.',
            'supplier_number.max' => 'The Supplier Number must not be greater than 255 characters.',
            'address.max' => 'The Address must not be greater than 65535 characters.',
            'postal_code.max' => 'The Postal must not be greater than 20 characters.',
            'telephone_number.max' => 'The Telephone must not be greater than 15 characters.',
            'ext.max' => 'The Ext must not be greater than 16 characters.',
            'fax.max' => 'The Fax must not be greater than 16 characters.',
            'email.max' => 'The Email must not be greater than 255 characters.',
            'phone_number.max' => 'The Phone Number must not be greater than 15 characters.',
            'category.max' => 'The Category must not be greater than 65535 characters.',
            'cluster_1.max' => 'The Cluster 1 must not be greater than 65535 characters.',
            'cluster_2_primary.max' => 'The Cluster 2 Primary must not be greater than 65535 characters.',
            'cluster_2_optional.max' => 'The Cluster 2 Optional must not be greater than 65535 characters.',

            'pic_account_manager.0.pic_account_name.max' => 'The Pic Account Name must not be greater than 255 characters.',
            'pic_account_manager.*.pic_account_name.max' => 'The Pic Account Name must not be greater than 255 characters.',

            'pic_account_manager.0.pic_account_nik.max' => 'The Pic Account NIK must not be greater than 25 characters.',
            'pic_account_manager.*.pic_account_nik.max' => 'The Pic Account NIK must not be greater than 25 characters.',

            'pic_account_manager.0.pic_account_position.max' => 'The Pic Account Position must not be greater than 255 characters.',
            'pic_account_manager.*.pic_account_position.max' => 'The Pic Account Position must not be greater than 255 characters.',

            'pic_account_manager.0.pic_account_email.max' => 'The Pic Account Email must not be greater than 255 characters.',
            'pic_account_manager.*.pic_account_email.max' => 'The Pic Account Email must not be greater than 255 characters.',

            'pic_account_manager.0.pic_account_email.email' => 'The Pic Account Email must be a valid email address.',
            'pic_account_manager.*.pic_account_email.email' => 'The Pic Account Email must be a valid email address.',

            'pic_account_manager.0.pic_account_phone_number.max' => 'The Pic Account Phone Number must not be greater than 15 characters.',
            'pic_account_manager.*.pic_account_phone_number.max' => 'The Pic Account Phone Number not be greater than 15 characters.',
            
            //pic finance

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

            'pic_finance.0.pic_finance_phone_number.max' => 'The Pic Finance Phone Number must not be greater than 15 characters.',
            'pic_finance.*.pic_finance_phone_number.max' => 'The Pic Finance Phone Number not be greater than 15 characters.',
        ];
    }

}
