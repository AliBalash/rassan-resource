<?php

namespace App\Http\Requests;

use App\Rules\MatchOldPassword;
use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'currentPassword' => ['required',new MatchOldPassword()],
            'newPassword' => ['required','confirmed','max:15','min:5'],
            'newPassword_confirmation' => ['required','max:15','min:5'],
        ];
    }

    public function attributes (){
        return [
            'currentPassword' => 'رمز عبور فعلی',
            'newPassword' => 'رمز عبور جدید',
            'newPassword_confirmation' => 'تایید رمز عبور جدید',
        ];
    }
}
