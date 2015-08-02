<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(AssociationTableSeeder::class);
        $this->call(ClubTableSeeder::class);
        $this->call(CategoryClubTableSeeder::class);
        $this->call(PlayerRoleTableSeeder::class);
        $this->call(PlayerTableSeeder::class);
        $this->call(PlayerProfileTableSeeder::class);
        $this->call(PlayerReferenceTableSeeder::class);

        Model::reguard();
    }
}
