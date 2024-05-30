<?php

namespace App\Http\Requests;

use App\Models\Employee;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CreateEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'lastname' => 'required|string',
            'firstname' => 'required|string',
            'function' => 'required|string',
            'role' => 'required|string|in:developer,project_manager',
            'slug' => ['required', 'min:8', 'regex:/^[a-z0-9\-]+$/', Rule::unique('employees')->ignore($this->route()->parameter('employee'))],
        ];
    }

    protected function prepareForValidation()
    {
        $slug = $this->input('slug') ?: Str::slug($this->input('firstname') . ' ' . $this->input('lastname'));

        $employee = Employee::where('slug', $slug)->first();

        if ($employee) {
            $this->merge([
                'slug' => $slug . '-' . uniqid()
            ]);
        } else {
            $this->merge([
                'slug' => $slug
            ]);
        }
    }
}
