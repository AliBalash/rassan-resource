<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class EmailOrMobile implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $value = convert_fa_num_to_en($value);

        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            if(strlen($value) !== 11 or !is_numeric($value)){
                return false;
            }else if((int) $value[0] !== 0 and (int) $value[1] !== 9){
                return false;
            }else{
                return true;
            }
        }else{
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('validation.emailormobile');
    }


}
