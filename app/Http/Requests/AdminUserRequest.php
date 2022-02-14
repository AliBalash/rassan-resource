<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class AdminUserRequest extends FormRequest
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
        $rules =  [
            'name' => ['required','string','max:255','min:2'],
            'lastname' => ['required','string','max:255','min:2'],
            'mobile' => 'required|max:11|min:11|unique:users',
            'email' => 'email|nullable|unique:users,email',
            'is_admin' => ['integer','max:1','min:1']
        ];

        if ($this->method() == "POST") {
            $rules['password'] = ['required','string','max:12','min:3'];
        }
        if ($this->method() == "PATCH") {
            $rules['mobile'] = 'required|max:11|min:11|unique:users,mobile,' . $this->user->id;
            $rules['email'] = 'email|nullable|unique:users,email,' . $this->user->id;
            $rules['password'] = ['nullable','string','max:12','min:3'];
        }

        return $rules;

    }

    public function attributes (){
        return [
            'name' => 'نام',
            'lastname' => 'نام خانوادگی',
            'mobile' => 'موبایل',
            'email' => 'ایمیل',
            'password' => 'رمزعبور',
        ];
    }

}
