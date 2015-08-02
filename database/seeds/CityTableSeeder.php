<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'name'          => 'Guayaquil',
            'code'          => 'GYE',
            'country_id'    => 1,
            'state_id'      => 1,
        ]);
    }
}
