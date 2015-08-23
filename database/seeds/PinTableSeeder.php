<?php

use Illuminate\Database\Seeder;

class PinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pins')->insert([
            'name'          => '12345678',
            'created_at'    => '2015-08-19 21:28:35',
        ]);
        DB::table('pins')->insert([
            'name'          => '23456789',
            'created_at'    => '2015-08-19 21:28:35',
        ]);
        DB::table('pins')->insert([
            'name'          => '34567890',
            'created_at'    => '2015-08-19 21:28:35',
        ]);
        DB::table('pins')->insert([
            'name'          => '45678901',
            'created_at'    => '2015-08-19 21:28:35',
        ]);
    }
}
