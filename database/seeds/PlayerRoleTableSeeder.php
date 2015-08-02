<?php

use Illuminate\Database\Seeder;

class PlayerRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('player_roles')->insert([
            'name' => 'Arquero'
        ]);
        DB::table('player_roles')->insert([
            'name' => 'Lateral derecho'
        ]);
        DB::table('player_roles')->insert([
            'name' => 'Defensa central'
        ]);
        DB::table('player_roles')->insert([
            'name' => 'Líbero'
        ]);
        DB::table('player_roles')->insert([
            'name' => 'Lateral izquierdo'
        ]);
        DB::table('player_roles')->insert([
            'name' => 'Volante defensivo'
        ]);
        DB::table('player_roles')->insert([
            'name' => 'Volante derecho'
        ]);
        DB::table('player_roles')->insert([
            'name' => 'Volante izquierdo'
        ]);
        DB::table('player_roles')->insert([
            'name' => 'Volante ofensivo'
        ]);
        DB::table('player_roles')->insert([
            'name' => 'Delantero'
        ]);
    }
}
