<?php

namespace App\Http\Requests\LearningAdmin\Store;

use App\Models\Employee;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreIdpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @param $request
     * @return array
     */
    public function rules(): array
    {
        $user = $this->input('input_user_id');
        $employee = Employee::findOrFail($user);
        return [
            'idp_period_id' => [
                'required',
                Rule::unique('idp')->where(function ($query) use ($employee) {
                    return $query->where('nik', $employee->nik);
                }),
            ],
            'user_id' => ['required', 'exists:employees,id']
        ];
    }
}
