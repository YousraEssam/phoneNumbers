<?php

namespace App\Services;

use App\Enums\CountryCode;
use App\Interfaces\IValidator;

class CountryCodeValidatorService implements IValidator
{
    /**
     * Validate Country Code
     *
     * @param array $inputs
     * @return bool
     */
    public function validate($inputs)
    {
        $code  = $inputs['code'];
        $phone = $inputs['phone'];

        $regexArr = [
            CountryCode::CAMEROON    => config('constants.cameroon_code_regex'),
            CountryCode::ETHIOPIA    => config('constants.ethiopia_code_regex'),
            CountryCode::MOROCCO     => config('constants.morocco_code_regex'),
            CountryCode::MOZAMBIQUE  => config('constants.mozambique_code_regex'),
            CountryCode::UGANDA      => config('constants.uganda_code_regex'),
        ];

        $fullNumber = '('.$code.')'.$phone;

        return preg_match($regexArr[$code], $fullNumber);
    }
}
