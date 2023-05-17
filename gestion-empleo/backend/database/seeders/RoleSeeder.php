<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = new Role;
        $role1->nameRole = "jefe talento humano";
        $role1->save();

        $role2 = new Role;
        $role2->nameRole = "jefe inmediato";
        $role2->save();

        $role3 = new Role;
        $role3->nameRole = "default";
        $role3->save();
    }
}
