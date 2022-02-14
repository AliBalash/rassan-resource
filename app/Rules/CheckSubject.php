<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckSubject implements Rule
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
        $subjectValues = [
            'provincials_after_sale',
            'after_sale_tehran',
            'after_sale_agency',
            'marketing_list',
        ];

        return in_array($value,$subjectValues);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('validation.checksubject');
    }
}
