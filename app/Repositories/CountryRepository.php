<?php

namespace App\Repositories;

use App\Models\Country;

class CountryRepository extends BaseRepository
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return Country::class;
    }
}
