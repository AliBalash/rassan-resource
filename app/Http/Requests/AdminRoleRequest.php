<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=> ['required','string','min:2','max:20'],
        ];
    }

    public function attributes (){
        return [
            'name' => 'عنوان',
            'permissionList' => 'لیست مجوزها'
        ];
    }

    public function messages()
    {
        return [
            'permissionList.required' => 'هیچ مجوزی برای این نقش انتخاب نشده است.',
            'name.required' => 'عنوان را وارد نمایید.',
        ];
    }
}
