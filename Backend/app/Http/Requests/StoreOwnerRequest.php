<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOwnerRequest extends FormRequest
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
            'fullname' =>'required|string:255',
            'email' =>'required|email|max:255',
            'phone' =>'required|string|max:10',
        ];
    }
    public function messages(): array
    {
        return [
            'fullname.required' => 'fullname bắt buộc nhập',
            
            'email.required' => 'email bắt buộc nhập',
            'email.email' => 'bắt buộc là email',
            'phone.required' => 'phone bắt buộc nhập',
            'phone.max' => 'phone không quá 10 ký tự',
        ];
    }
}
