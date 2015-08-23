<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name'          => 'Casos de factorización',
            'created_at'    => '2015-08-19 21:28:35',
        ]);
        DB::table('courses')->insert([
            'name'          => 'Rendimiento académico',
            'created_at'    => '2015-08-19 21:28:35',
        ]);
        DB::table('courses')->insert([
            'name'          => 'Salud en los niños',
            'created_at'    => '2015-08-19 21:28:35',
        ]);
        DB::table('courses')->insert([
            'name'          => 'Factores psicológicos',
            'created_at'    => '2015-08-19 21:28:35',
        ]);
    }
}
