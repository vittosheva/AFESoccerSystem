<?php

use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'first_name'    => 'Vittorio Geovanny',
            'last_name'     => 'Dormi Delgado',
            'id_number'     => '1231231236'
        ]);
        DB::table('players')->insert([
            'first_name'    => 'Maria Margarita',
            'last_name'     => 'Loor Solorzano',
            'id_number'     => '1132312312'
        ]);
    }
}
