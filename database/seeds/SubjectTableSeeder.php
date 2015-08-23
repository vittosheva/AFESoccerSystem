<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'name'      => 'Inglés',
            'created_at'    => '2015-08-19 21:28:35',
        ]);
        DB::table('subjects')->insert([
            'name'      => 'Informática',
            'created_at'    => '2015-08-19 21:28:35',
        ]);
        DB::table('subjects')->insert([
            'name'      => 'Matemáticas',
            'created_at'    => '2015-08-19 21:28:35',
        ]);
        DB::table('subjects')->insert([
            'name'      => 'Filosofía',
            'created_at'    => '2015-08-19 21:28:35',
        ]);
    }
}
