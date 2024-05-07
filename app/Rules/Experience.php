<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Experience implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ((int) $value < 0) {
            $fail('Negative value not allowed.');
        }

        if (! (int) $value && ! empty($value)) {
            $fail('Only numeric value allowed.');
        }

        if (! is_numeric((int) $value) && ! empty($value)) {
            $fail('Only numeric value allowed.');
        }
    }
}
