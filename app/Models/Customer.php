<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory, Filterable;

    const LIMIT_PER_PAGE = 10;
    const VALID_PHONE = 'OK';
    const INVALID_PHONE = 'NOK';

    protected $guarded = [];

    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];

    /**
     * Get the country that owns the customer.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function getIsValidPhoneAttribute()
    {
        return $this->attributes['is_valid_phone'] ? self::VALID_PHONE : self::INVALID_PHONE;
    }
}
