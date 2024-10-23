<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class FiveCharName implements Rule
{
    public function passes($attribute, $value)
    {
        return strlen($value) === 5;
    }

    public function message()
    {
        return 'The :attribute must be exactly 5 characters long.';
    }
}
