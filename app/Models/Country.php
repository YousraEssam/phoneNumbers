<?php

namespace App\Models;

use App\Enums\CountryCode;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];

    /**
     * Get the customers for the country.
     */
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public function getCountryCodeAttribute()
    {
        return '+'.CountryCode::getInstance($this->code)->value;
    }
}
