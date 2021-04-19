<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1=Role::create(['name' => 'SistemaGestionDeCalidad']);
        $rol2=Role::create(['name' => 'DirectorEscuela']);
        $rol3=Role::create(['name' => 'Decano']);

        Permission::create(['name' =>''])
    }
}
