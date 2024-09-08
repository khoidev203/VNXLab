<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthorRequest extends FormRequest
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
            'author_name' => 'required|string|max:50',
        ];
    }

    public function messages(): array
    {
        return [
            'author_name.required' => 'Author name bắt buộc nhập',
            'author_name.string' => 'Author name phải là ký tự',
            'author_name.max' => 'Author name không quá 50 ký tự',
        ];
    }
}
