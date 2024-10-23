<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ImageOnly implements Rule
{
    public function passes($attribute, $value)
    {
        $mimeType = $value->getMimeType();
        return in_array($mimeType, ['image/jpeg', 'image/png', 'image/jpg']);
    }

    public function message()
    {
        return 'The :attribute must be an image (jpeg, jpg, png).';
    }
}
