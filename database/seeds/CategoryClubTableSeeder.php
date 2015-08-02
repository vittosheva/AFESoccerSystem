<?php

use Illuminate\Database\Seeder;

class CategoryClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_clubs')->insert([
            'club_id'       => 1,
            'category_id'   => 1,
            'year'          => '2014'
        ]);
    }
}
