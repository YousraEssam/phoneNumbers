<?php

namespace App\Http\Filters;

class CustomerFilter extends QueryFilter
{
    public function countryId($countryId)
    {
        if($countryId > 0) {
            $this->builder->where('country_id', $countryId);
        }

        $this->builder;
    }

    public function isValidPhone($isValidPhone)
    {
        $value = $isValidPhone == "true" ? 1 : 0;
        if($isValidPhone != 0){
            $this->builder->where('is_valid_phone', $value);
        }

        $this->builder;
    }
}
