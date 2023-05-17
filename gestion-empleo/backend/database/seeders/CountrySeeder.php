<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $country1 = new Country;
        $country1->nameCountry = "Colombia";
        $country1->save();

        $country2 = new Country;
        $country2->nameCountry = "Argentina";
        $country2->save();

        $country3 = new Country;
        $country3->nameCountry = "Costa Rica";
        $country3->save();
    }
}
