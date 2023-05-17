<?php

namespace Database\Seeders;

use App\Models\Neighborhood;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NeighborhoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $neighborhood1 = new Neighborhood();
        $neighborhood1->city_id = 1;
        $neighborhood1->nameNeighborhood = "Caney";
        $neighborhood1->save();

        $neighborhood2 = new Neighborhood();
        $neighborhood2->city_id = 1;
        $neighborhood2->nameNeighborhood = "Valle del lili";
        $neighborhood2->save();

        $neighborhood3 = new Neighborhood();
        $neighborhood3->city_id = 1;
        $neighborhood3->nameNeighborhood = "El ingenio";
        $neighborhood3->save();

        $neighborhood4 = new Neighborhood();
        $neighborhood4->city_id = 2;
        $neighborhood4->nameNeighborhood = "Libertadores";
        $neighborhood4->save();

        $neighborhood5 = new Neighborhood();
        $neighborhood5->city_id = 2;
        $neighborhood5->nameNeighborhood = "Zamorano";
        $neighborhood5->save();

        $neighborhood6 = new Neighborhood();
        $neighborhood6->city_id = 2;
        $neighborhood6->nameNeighborhood = "Las mercedes";
        $neighborhood6->save();

        $neighborhood7 = new Neighborhood();
        $neighborhood7->city_id = 3;
        $neighborhood7->nameNeighborhood = "El piñal";
        $neighborhood7->save();

        $neighborhood8 = new Neighborhood();
        $neighborhood8->city_id = 3;
        $neighborhood8->nameNeighborhood = "La independencia";
        $neighborhood8->save();

        $neighborhood9 = new Neighborhood();
        $neighborhood9->city_id = 3;
        $neighborhood9->nameNeighborhood = "El puerto";
        $neighborhood9->save();
    }
}
