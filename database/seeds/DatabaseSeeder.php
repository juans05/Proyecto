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
       // $Apoderado=factory('App\Entities\Apoderado',6)->create();
        $Apoderado=factory('App\Entities\persona',6)->create();
        $Apoderado=factory('App\Entities\Alumno',6)->create();
        Model::reguard();
    }
}
