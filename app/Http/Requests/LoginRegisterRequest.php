<?php

namespace App\Http\Requests;

use App\Rules\EmailOrMobile;
use Illuminate\Foundation\Http\FormRequest;

class LoginRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'emailormobile' => ['required', 'string', new EmailOrMobile],
        ];
    }

    public function attributes (){
        return [
            'emailormobile' => trans('validation.attributes.email_or_mobile_input'),
        ];
    }
}
