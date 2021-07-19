<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        User::create([
            'name'=> 'Salcedo el Mudo :v',
            'email' => 'Elmudohablador@gmail.com',
            'password' => bcrypt('12345678'),
            'Id_Rol' => '1'
        ])->assignRole('SistemaGestionDeCalidad');

        User::create([
            'name'=> 'Salcedo :v',
            'email' => 'Director@gmail.com',
            'password' => bcrypt('12345678'),
            'Id_Rol' => '2'
        ])->assignRole('DirectorEscuela');
            
        User::create([
            'name'=> 'El Mudo :v',
            'email' => 'Decano@gmail.com',
            'password' => bcrypt('12345678'),
            'Id_Rol' => '3'
        ])->assignRole('Decano');
        User::create([
            'name'=> 'Registros Academicos',
            'email' => 'RegistrosAcademicos@gmail.com',
            'password' => bcrypt('12345678'),
            'Id_Rol' => '4'
        ]);
        User::create([
            'name'=> 'Admision',
            'email' => 'Admision@gmail.com',
            'password' => bcrypt('12345678'),
            'Id_Rol' => '5'
        ]);
        User::create([
            'name'=> 'Docente',
            'email' => 'Docente@gmail.com',
            'password' => bcrypt('12345678'),
            'Id_Rol' => '6'
        ]);
        User::create([
            'name'=> 'Docente Tutor',
            'email' => 'DocenteTutor@gmail.com',
            'password' => bcrypt('12345678'),
            'Id_Rol' => '7'
        ]);
        User::create([
            'name'=> 'Director Unidad de Psicopedagogia',
            'email' => 'Psicopedagogia@gmail.com',
            'password' => bcrypt('12345678'),
            'Id_Rol' => '8'
        ]);
        User::create([
            'name'=> 'Relaciones Internacionales',
            'email' => 'RelacionesInternacionales@gmail.com',
            'password' => bcrypt('12345678'),
            'Id_Rol' => '9'
        ]);
        User::create([
            'name'=> 'Unidad de Pedagogia',
            'email' => 'UnidadPedagogia@gmail.com',
            'password' => bcrypt('12345678'),
            'Id_Rol' => '10'
        ]);
        User::create([
            'name'=> 'ATTseguimientoEgresado',
            'email' => 'ATTseguimientoEgresado@gmail.com',
            'password' => bcrypt('12345678'),
            'Id_Rol' => '11'
        ]);
        User::create([
            'name'=> 'Virrectorado Academico',
            'email' => 'Virrectorado Academicos@gmail.com',
            'password' => bcrypt('12345678'),
            'Id_Rol' => '12'
        ]);
    }
}

