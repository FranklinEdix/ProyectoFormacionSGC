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
        //Agregando nuevos roles
        $rol4=Role::create(['name' => 'Registros Academicos']);
        $rol5=Role::create(['name' => 'Admision']);
        $rol6=Role::create(['name' => 'Docente']);
        $rol7=Role::create(['name' => 'Docente Tutor']);
        $rol8=Role::create(['name' => 'Director Unidad de Psicopedagogía']);
        $rol9=Role::create(['name' => 'Direccion de ralaciones internacionales']);
        $rol10=Role::create(['name' => 'Director de Unidad de pedagogia y currículo']);
        $rol11=Role::create(['name' => 'ATT y seguimiento egresados']);
        $roll2=Role::create(['name' => 'Vicerrectorado academico']);

        //Permission::create(['name' => 'dashboard'])->syncRoles($rol1);
        Permission::create(['name' => 'dashboardFormacion'])->syncRoles($rol1);
        Permission::create(['name' => 'dashboard.NivelacionPrincipal'])->syncRoles($rol1);
        Permission::create(['name' => 'dashboard.NivelacionEnse-Aprendizaje'])->syncRoles($rol1);
        
        Permission::create(['name' => 'DirectorEscuela'])->syncRoles($rol2);
        Permission::create(['name' => 'Decano'])->syncRoles($rol3);

    }
}
