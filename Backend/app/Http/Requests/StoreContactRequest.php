<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function messages()
    {
        return  [
            'fullname.required' => 'Họ và tên không được để trống',
            'email.required' => 'Email không được để trống',
            'title.required' => 'Tiêu đề không được để trống',
            'message.required' => 'Thông điệp không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'title' => 'required|string|max:255',
            'message' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ];
    }
}
