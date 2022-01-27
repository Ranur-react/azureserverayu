<?php

namespace App\Http\Requests\SuperAdmin\Update;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('user_edit');

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $user = $this->route()->parameter('user');
        return [
            'name' => [
                'required', 'min:3', 'max:255'
            ],
            'email' => [
                'required', 'email', Rule::unique('users')->ignore($user),
            ],
            'password' => [
                'sometimes', 'nullable' ,  'string', 'confirmed', Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
            'role' => [
                'required','numeric', 'exists:roles,id'
            ],
        ];
    }
}
