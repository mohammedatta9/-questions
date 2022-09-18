<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create(['name'=>'السعودية']);
        Country::create(['name'=>'مصر']);
        Country::create(['name'=>'الإمارات']);

    City::create(['name'=>'جدة','country_id'=>1]);
    City::create(['name'=>'الرياض','country_id'=>1]);
    City::create(['name'=>'القاهرة','country_id'=>2]);
    City::create(['name'=>'دبي','country_id'=>3]);
    }
}
