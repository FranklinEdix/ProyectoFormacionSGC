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
            'email' => 'Decano@gmail.com',
            'password' => bcrypt('12345678'),
            'Id_Rol' => '2'
        ])->assignRole('DirectorEscuela');

        User::create([
            'name'=> 'El Mudo :v',
            'email' => 'Director@gmail.com',
            'password' => bcrypt('12345678'),
            'Id_Rol' => '3'
        ])->assignRole('DirectorEscuela');
    }
}
