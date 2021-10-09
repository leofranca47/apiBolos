<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class cakeInterestedExist implements Rule
{
    private $interested;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($interested)
    {
        $this->interested = $interested;
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
        dd($attribute);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
