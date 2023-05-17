<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $city1 = new City;
        $city1->country_id = 1;
        $city1->nameCity = "Cali";
        $city1->save();

        $city2 = new City;
        $city2->country_id = 1;
        $city2->nameCity = "Palmira";
        $city2->save();

        $city3 = new City;
        $city3->country_id = 1;
        $city3->nameCity = "Buenaventura";
        $city3->save();

        $city4 = new City;
        $city4->country_id = 2;
        $city4->nameCity = "Buenos Aires";
        $city4->save();

        $city5 = new City;
        $city5->country_id = 2;
        $city5->nameCity = "Mar de plata";
        $city5->save();

        $city6 = new City;
        $city6->country_id = 3;
        $city6->nameCity = "Heredia";
        $city6->save();

        $city7 = new City;
        $city7->country_id = 3;
        $city7->nameCity = "San José";
        $city7->save();
    }
}
