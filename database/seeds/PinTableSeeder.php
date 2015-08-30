<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cant = 50;
        $faker = Faker::create();

        for($i = 1; $i <= $cant; $i++){
            $pin = $faker->randomNumber(8);
            DB::table('pins')->insert([
                'pin'           => $pin,
                'created_at'    => '2015-08-19 21:28:35',
                'updated_at'    => '2015-08-19 21:28:35'
            ]);
        }

        /*DB::table('pins')->insert([
            'pin'           => '12345678',
            'created_at'    => '2015-08-19 21:28:35',
            'updated_at'    => '2015-08-19 21:28:35'
        ]);
        DB::table('pins')->insert([
            'pin'           => '23456789',
            'created_at'    => '2015-08-19 21:28:35',
            'updated_at'    => '2015-08-19 21:28:35'
        ]);
        DB::table('pins')->insert([
            'pin'           => '34567890',
            'created_at'    => '2015-08-19 21:28:35',
            'updated_at'    => '2015-08-19 21:28:35'
        ]);
        DB::table('pins')->insert([
            'pin'           => '45678901',
            'created_at'    => '2015-08-19 21:28:35',
            'updated_at'    => '2015-08-19 21:28:35'
        ]);*/
    }
}
