<?php

namespace Database\Seeders;

use App\Enums\CountryCode;
use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::insert([
            [
                'name' => 'Cameroon',
                'code' => CountryCode::CAMEROON,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ethiopia',
                'code' => CountryCode::ETHIOPIA,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Morocco',
                'code' => CountryCode::MOROCCO,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mozambique',
                'code' => CountryCode::MOZAMBIQUE,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Uganda',
                'code' => CountryCode::UGANDA,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
