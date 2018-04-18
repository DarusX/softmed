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
        factory(App\estudio::class,50)->create();
        factory(App\medicamento::class,50)->create();
        factory(App\paciente::class,50)->create();
    }
}
