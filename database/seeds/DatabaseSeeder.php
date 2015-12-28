<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        // factory(App\Publicacion::class, 50)->create();
        factory(App\Visita::class, 200)->create();

        Model::reguard();
    }
}
