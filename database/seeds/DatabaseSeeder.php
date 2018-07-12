<?php

use Illuminate\Database\Seeder;

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
        factory(App\tipoUsuario::class,4)->create();
    }
}
