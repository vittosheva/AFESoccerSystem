<?php

use Illuminate\Database\Seeder;

class PlayerReferenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('player_references')->insert([
            'player_profile_id'     => 1,
            'year'                  => '2014',
            'fee'                   => '99',
            'other_comments'        => 'This is my other comments.',
            'management_comments'   => 'This is management comments.'
        ]);
    }
}
