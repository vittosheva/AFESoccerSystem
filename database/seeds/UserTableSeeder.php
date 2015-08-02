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
            'name'      => 'AFE',
            'email'     => 'afecuador3@gmail.com',
            'password'  => bcrypt('afecuador')
        ]);
    }
}
