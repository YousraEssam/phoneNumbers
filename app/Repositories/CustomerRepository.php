<?php

namespace App\Repositories;

use App\Interfaces\ISearchableFields;
use App\Models\Customer;

class CustomerRepository extends BaseRepository implements ISearchableFields
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return Customer::class;
    }

    public function getFieldsSearchable()
    {
        return ['country_id', 'is_valid_phone'];
    }
}
