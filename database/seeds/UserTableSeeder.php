<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'Vittorio Dormi',
            'email'     => 'vittosheva@gmail.com',
            'password'  => bcrypt('iPhone7730__')
        ]);
        DB::table('users')->insert([
            'name'      => 'Admin',
            'email'     => 'info@mitutoriadigital.com',
            'password'  => bcrypt('mitutoriadigital')
        ]);
    }
}
