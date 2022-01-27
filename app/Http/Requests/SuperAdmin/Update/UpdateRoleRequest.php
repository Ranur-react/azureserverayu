<?php

namespace App\Http\Requests\SuperAdmin\Update;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('role_edit');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $role = $this->route()->parameter('role');
        return [
            'name' => [
                'required', 'string' , 'max:255', Rule::unique('roles')->ignore($role),
                ],

            "permission"    => "required|array",
            "permission.*"  => "required|numeric|distinct|exists:permissions,id",
        ];
    }
}
