<?php

use Illuminate\Database\Seeder;

class PlayerProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('player_profiles')->insert([
            'player_id'         => 1,
            'category_club_id'  => 1,
            'city_id'           => 1
        ]);
    }
}
