<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Hora;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\estudio::class,30)->create();
        factory(App\medicamento::class,30)->create();
        factory(App\enfermedad::class,30)->create();
        factory(App\paciente::class,30)->create();

        Role::create([
            'role' => 'Medico'
        ])->users()->create([
            'name' => 'Médico',
            'email' => 'medico@softmed.com.mx',
            'password' => bcrypt('123456')
        ]);

        Role::create([
            'role' => 'Recepción'
        ])->users()->create([
            'name' => 'Recepción',
            'email' => 'recepcion@softmed.com.mx',
            'password' => bcrypt('123456')
        ]);
        Hora::create ([
            'hora'=> '08:00',
        ]);

    }
}
