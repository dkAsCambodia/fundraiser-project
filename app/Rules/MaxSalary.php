<?php

namespace App\Rules;

use App\Common\SalaryValidation;
use Closure;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\ValidationRule;

class MaxSalary implements DataAwareRule, ValidationRule
{
    /**
     * All of the data under validation.
     *
     * @var array<string, mixed>
     */
    protected $data = [];

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($this->data['salary_type'] == 'salary_range' && ! empty($value)) {
            SalaryValidation::validate($value, $fail);

            if ($value < $this->data['min_salary']) {
                $fail('The :attribute field must be greater than min salary.');
            }
        }
    }

    public function setData(array $data)
    {
        $this->data = $data;
    }
}
