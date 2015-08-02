<?php

use Illuminate\Database\Seeder;

class AssociationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('associations')->insert([
            'name'          => 'A.F.A.',
            'city_id'       => 1,
        ]);
    }
}
