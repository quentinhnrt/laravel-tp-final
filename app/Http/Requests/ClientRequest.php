<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class ClientRequest extends FormRequest
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
            'name' => ['required', 'max:255', 'string'],
            'address' => ['required', 'max:255', 'string'],
            'website' => ['required', 'max:255', 'string'],
            'slug' => ['required', 'max:255', 'string', Rule::unique('clients', 'slug')->ignore($this->client)],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => $this->input('slug') ?: Str::slug($this->input('name'))
        ]);
    }
}
