<?php

use App\Entities\Admin\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*
        'firstname'
        'lastname'
        'email'
        'username'
        'password'
        'email_verified_at'
        'start_date'
        'end_date'
        */


        //creamos el primier usuario para gestionar la seguridad
        $root = new User();
        $root -> email = 'root@ticket.com';
        $root -> username = 'root';
        $root -> firstname = 'Root';
        $root -> lastname = 'Administrador';
        $root -> password = 'pass123';
        $root -> created_by = 1;
        $root -> updated_by = 1;
        $root -> save();

        //crear el segundo usario
        $user = new User();
        $user -> email = 'cristian@ticket.com';
        $user -> username = 'Cris';
        $user -> firstname = 'Cristian';
        $user -> lastname = 'Aguilar';
        $user -> password = bcrypt('pass123');
        $user -> created_by = $root->id;
        $user -> updated_by = $root->id;
        $user -> save();
    }
}
