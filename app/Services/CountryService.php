<?php

namespace App\Services;

use App\Repositories\CountryRepository;

class CountryService
{
    protected $countryRepo;

    public function __construct(CountryRepository $countryRepo)
    {
        $this->countryRepo = $countryRepo;
    }

    /**
     * Get list of specific values from a given array
     *
     * @param string $value
     * @param string $key
     *
     * @return Array
     */
    public function pluckFields($value, $key = null)
    {
        return $this->countryRepo->pluck($value, $key);
    }
}
