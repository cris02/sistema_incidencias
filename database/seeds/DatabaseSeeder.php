<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //configuracion para poblar la base de datos y evitar la duplicidad de campos
        Model::unguard(); //desabilita la proteccion masiva de datos

        try {
            //code...
            Schema::disableForeignKeyConstraints(); //se desabilita la restricciones

            $this->call(UsersTableSeeder::class);

            Schema::enableForeignKeyConstraints(); // se habilitan las restricciones
        } catch (\Throwable $th) {
            //throw $th;
            return $th->getMessage();
        }
    }
}
