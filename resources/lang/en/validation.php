<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'must be accepted.',
    'active_url' => 'is not a valid URL.',
    'after' => 'must be a date after :date.',
    'after_or_equal' => 'must be a date after or equal to :date.',
    'alpha' => 'may only contain letters.',
    'alpha_dash' => 'may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'may only contain letters and numbers.',
    'array' => 'must be an array.',
    'before' => 'must be a date before :date.',
    'before_or_equal' => 'must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'must be between :min and :max.',
        'file' => 'must be between :min and :max kilobytes.',
        'string' => 'must be between :min and :max characters.',
        'array' => 'must have between :min and :max items.',
    ],
    'boolean' => 'field must be true or false.',
    'confirmed' => 'confirmation does not match.',
    'date' => 'is not a valid date.',
    'date_equals' => 'must be a date equal to :date.',
    'date_format' => 'does not match the format :format.',
    'different' => 'and :other must be different.',
    'digits' => 'must be :digits digits.',
    'digits_between' => 'must be between :min and :max digits.',
    'dimensions' => 'has invalid image dimensions.',
    'distinct' => 'field has a duplicate value.',
    'email' => 'must be a valid email address.',
    'ends_with' => 'must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'must be a file.',
    'filled' => 'field must have a value.',
    'gt' => [
        'numeric' => 'must be greater than :value.',
        'file' => 'must be greater than :value kilobytes.',
        'string' => 'must be greater than :value characters.',
        'array' => 'must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'must be greater than or equal :value.',
        'file' => 'must be greater than or equal :value kilobytes.',
        'string' => 'must be greater than or equal :value characters.',
        'array' => 'must have :value items or more.',
    ],
    'image' => 'must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'field does not exist in :other.',
    'integer' => 'must be a number.',
    'ip' => 'must be a valid IP address.',
    'ipv4' => 'must be a valid IPv4 address.',
    'ipv6' => 'must be a valid IPv6 address.',
    'json' => 'must be a valid JSON string.',
    'lt' => [
        'numeric' => 'must be less than :value.',
        'file' => 'must be less than :value kilobytes.',
        'string' => 'must be less than :value characters.',
        'array' => 'must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'must be less than or equal :value.',
        'file' => 'must be less than or equal :value kilobytes.',
        'string' => 'must be less than or equal :value characters.',
        'array' => 'must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'may not be greater than :max.',
        'file' => 'may not be greater than :max kilobytes.',
        'string' => 'may not be greater than :max characters.',
        'array' => 'may not have more than :max items.',
    ],
    'mimes' => 'must be a file of type: :values.',
    'mimetypes' => 'must be a file of type: :values.',
    'min' => [
        'numeric' => 'must be at least :min.',
        'file' => 'must be at least :min kilobytes.',
        'string' => 'must be at least :min characters.',
        'array' => 'must have at least :min items.',
    ],
    'multiple_of' => 'must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'format is invalid.',
    'numeric' => 'must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'field must be present.',
    'regex' => 'format is invalid.',
    'required' => 'This field is required.',
    'required_if' => 'field is required when :other is :value.',
    'required_unless' => 'field is required unless :other is in :values.',
    'required_with' => 'field is required when :values is present.',
    'required_with_all' => 'field is required when :values are present.',
    'required_without' => 'field is required when :values is not present.',
    'required_without_all' => 'field is required when none of :values are present.',
    'same' => 'and :other must match.',
    'size' => [
        'numeric' => 'must be :size.',
        'file' => 'must be :size kilobytes.',
        'string' => 'must be :size characters.',
        'array' => 'must contain :size items.',
    ],
    'starts_with' => 'must start with one of the following: :values.',
    'string' => 'must be a string.',
    'timezone' => 'must be a valid zone.',
    'unique' => 'has already been taken.',
    'uploaded' => 'failed to upload.',
    'url' => 'format is invalid.',
    'uuid' => 'must be a valid UUID.',
    'captcha' => 'the captcha code is not correct.',
    'checksubject' => 'the subject is not correct',
    'matcholdpassword' => 'رمز عبور قبلی نادرست است.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
