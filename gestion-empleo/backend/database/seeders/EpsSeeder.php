<?php

namespace Database\Seeders;

use App\Models\Eps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eps1 = new Eps();
        $eps1->country_id = 1;
        $eps1->city_id = 1;
        $eps1->neighborhood_id = 1;
        $eps1->nameEps = "Sanitas";
        $eps1->address = "calle 5a con pasoancho";
        $eps1->email = "sanitas@sanitas.com";
        $eps1->mobile = "123456789";
        $eps1->save();

        $eps2 = new Eps();
        $eps2->country_id = 2;
        $eps2->city_id = 2;
        $eps2->neighborhood_id = 2;
        $eps2->nameEps = "Sura";
        $eps2->address = "calle 5a con pasoancho";
        $eps2->email = "sura@sura.com";
        $eps2->mobile = "123456789";
        $eps2->save();

        $eps3 = new Eps();
        $eps3->country_id = 3;
        $eps3->city_id = 3;
        $eps3->neighborhood_id = 3;
        $eps3->nameEps = "Comfandi";
        $eps3->address = "calle 5a con pasoancho";
        $eps3->email = "comfandi@comfandi.com";
        $eps3->mobile = "123456789";
        $eps3->save();
    }
}
