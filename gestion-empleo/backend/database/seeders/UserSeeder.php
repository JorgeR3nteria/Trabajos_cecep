<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User();
        $user1->role_id = 1;
        $user1->country_id = 1;
        $user1->city_id = 1;
        $user1->neighborhood_id = 1;
        $user1->eps_id = 1;
        $user1->email = "jorge@gmail.com";
        $user1->address = "calle 55, guabal";
        $user1->mobile = "123456789";
        $user1->name = "Jorge";
        $user1->lastname = "Renteria";
        $user1->password = "jorge123";
        $user1->save();
    }
}
