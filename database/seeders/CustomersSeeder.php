<?php

namespace Database\Seeders;

use App\Enums\CountryCode;
use Carbon\Carbon;
use App\Models\Country;
use App\Models\Customer;
use App\Services\CountryCodeValidatorService;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    private $countryCodeValidatorService;

    public function __construct(CountryCodeValidatorService $countryCodeValidatorService)
    {
        $this->countryCodeValidatorService = $countryCodeValidatorService;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cameroonId   = Country::firstWhere('code', CountryCode::CAMEROON)->id;
        $ethiopiaId   = Country::firstWhere('code', CountryCode::ETHIOPIA)->id;
        $moroccoId    = Country::firstWhere('code', CountryCode::MOROCCO)->id;
        $mozambiqueId = Country::firstWhere('code', CountryCode::MOZAMBIQUE)->id;
        $ugandaId     = Country::firstWhere('code', CountryCode::UGANDA)->id;

        Customer::insert([
            [
                'name' => 'Walid Hammadi',
                'country_id' => $moroccoId,
                'phone' => '6007989253',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::MOROCCO, 'phone' => '6007989253']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Yosaf Karrouch',
                'country_id' => $moroccoId,
                'phone' => '698054317',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::MOROCCO, 'phone' => '698054317']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Younes Boutikyad',
                'country_id' => $moroccoId,
                'phone' => '6546545369',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::MOROCCO, 'phone' => '6546545369']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Choud Malo',
                'country_id' => $moroccoId,
                'phone' => '691933626',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::MOROCCO, 'phone' => '691933626']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'soufiane fritisse',
                'country_id' => $moroccoId,
                'phone' => '633963130',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::MOROCCO, 'phone' => '633963130']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Nada Sofie',
                'country_id' => $moroccoId,
                'phone' => '654642448',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::MOROCCO, 'phone' => '654642448']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Edunildo Gomes Alberto',
                'country_id' => $mozambiqueId,
                'phone' => '847651504',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::MOZAMBIQUE, 'phone' => '847651504']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Walla\'s Singz Junior',
                'country_id' => $mozambiqueId,
                'phone' => '846565883',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::MOZAMBIQUE, 'phone' => '846565883']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'sevilton sylvestre',
                'country_id' => $mozambiqueId,
                'phone' => '849181828',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::MOZAMBIQUE, 'phone' => '849181828']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tanvi Sachdeva',
                'country_id' => $mozambiqueId,
                'phone' => '84330678235',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::MOZAMBIQUE, 'phone' => '84330678235']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Florencio Samuel',
                'country_id' => $mozambiqueId,
                'phone' => '847602609',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::MOZAMBIQUE, 'phone' => '847602609']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Solo Dolo',
                'country_id' => $mozambiqueId,
                'phone' => '042423566',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::MOZAMBIQUE, 'phone' => '042423566']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pedro B 173',
                'country_id' => $mozambiqueId,
                'phone' => '823747618',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::MOZAMBIQUE, 'phone' => '823747618']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ezequiel Fenias',
                'country_id' => $mozambiqueId,
                'phone' => '848826725',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::MOZAMBIQUE, 'phone' => '848826725']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'JACKSON NELLY',
                'country_id' => $ugandaId,
                'phone' => '775069443',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::UGANDA, 'phone' => '775069443']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Kiwanuka Budallah',
                'country_id' => $ugandaId,
                'phone' => '7503O6263',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::UGANDA, 'phone' => '7503O6263']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'VINEET SETH',
                'country_id' => $ugandaId,
                'phone' => '704244430',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::UGANDA, 'phone' => '704244430']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jokkene Richard',
                'country_id' => $ugandaId,
                'phone' => '7734127498',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::UGANDA, 'phone' => '7734127498']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ogwal David',
                'country_id' => $ugandaId,
                'phone' => '7771031454',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::UGANDA, 'phone' => '7771031454']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'pt shop 0901 Ultimo',
                'country_id' => $ugandaId,
                'phone' => '3142345678',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::UGANDA, 'phone' => '3142345678']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Daniel Makori',
                'country_id' => $ugandaId,
                'phone' => '714660221',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::UGANDA, 'phone' => '714660221']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'shop23 sales',
                'country_id' => $ethiopiaId,
                'phone' => '9773199405',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::ETHIOPIA, 'phone' => '9773199405']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Filimon Embaye',
                'country_id' => $ethiopiaId,
                'phone' => '914701723',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::ETHIOPIA, 'phone' => '914701723']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ABRAHAM NEGASH',
                'country_id' => $ethiopiaId,
                'phone' => '911203317',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::ETHIOPIA, 'phone' => '911203317']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ZEKARIAS KEBEDE',
                'country_id' => $ethiopiaId,
                'phone' => '9119454961',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::ETHIOPIA, 'phone' => '9119454961']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'EPHREM KINFE',
                'country_id' => $ethiopiaId,
                'phone' => '914148181',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::ETHIOPIA, 'phone' => '914148181']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Karim Niki',
                'country_id' => $ethiopiaId,
                'phone' => '966002259',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::ETHIOPIA, 'phone' => '966002259']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Frehiwot Teka',
                'country_id' => $ethiopiaId,
                'phone' => '988200000',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::ETHIOPIA, 'phone' => '988200000']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Fanetahune Abaiao',
                'country_id' => $ethiopiaId,
                'phone' => '924418461',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::ETHIOPIA, 'phone' => '924418461']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Yonatan Tekelay',
                'country_id' => $ethiopiaId,
                'phone' => '911168450',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::ETHIOPIA, 'phone' => '911168450']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'EMILE CHRISTIAN KOUKOU DIKANDA HONORE',
                'country_id' => $cameroonId,
                'phone' => '697151594',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::CAMEROON, 'phone' => '697151594']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'MICHAEL MICHAEL',
                'country_id' => $cameroonId,
                'phone' => '677046616',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::CAMEROON, 'phone' => '677046616']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ARREYMANYOR ROLAND TABOT',
                'country_id' => $cameroonId,
                'phone' => '6A0311634',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::CAMEROON, 'phone' => '6A0311634']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'LOUIS PARFAIT OMBES NTSO',
                'country_id' => $cameroonId,
                'phone' => '673122155',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::CAMEROON, 'phone' => '673122155']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'JOSEPH FELICIEN NOMO',
                'country_id' => $cameroonId,
                'phone' => '695539786',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::CAMEROON, 'phone' => '695539786']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'SUGAR STARRK BARRAGAN',
                'country_id' => $cameroonId,
                'phone' => '6780009592',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::CAMEROON, 'phone' => '6780009592']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'WILLIAM KEMFANG',
                'country_id' => $cameroonId,
                'phone' => '6622284920',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::CAMEROON, 'phone' => '6622284920']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'THOMAS WILFRIED LOMO LOMO',
                'country_id' => $cameroonId,
                'phone' => '696443597',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::CAMEROON, 'phone' => '696443597']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dominique mekontchou',
                'country_id' => $cameroonId,
                'phone' => '691816558',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::CAMEROON, 'phone' => '691816558']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Nelson Nelson',
                'country_id' => $cameroonId,
                'phone' => '699209115',
                'is_valid_phone' => $this->countryCodeValidatorService->validate(['code' => CountryCode::CAMEROON, 'phone' => '699209115']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
