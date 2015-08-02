<?php

use Illuminate\Database\Seeder;

class ClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* SERIE A */
        DB::table('clubs')->insert([
            'name'          => 'Barcelona Sporting Club',
            'stadium_name'  => 'ESTADIO MONUMENTAL ISIDRO ROMERO CARBO BANCO PICHINCHA',
            'address'       => 'CDLA.BELLAVISTA',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'C.S. Emelec',
            'stadium_name'  => 'ESTADIO GEORGE CAPWELL',
            'address'       => 'GENERAL GOMEZ # 1312 Y AVENIDA QUITO',
            'city_id'       => 1
            
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Deportivo Cuenca',
            'stadium_name'  => '',
            'address'       => 'AV. DEL ESTADIO Y JOSE PERALTA BAJO DE TRIBUNA NORTE',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'El Nacional',
            'stadium_name'  => '',
            'address'       => 'ASUNI E ISLA SAN CRISTOBAL (CDLA. JIPIJAPA)',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Independiente del Valle',
            'stadium_name'  => '',
            'address'       => 'VIA. AMAGUANA CALLE F S/N Y CALLE I',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Liga de Loja',
            'stadium_name'  => '',
            'address'       => 'BOLIVAR # 1092 ENTRE AZUAY MIGUEL RIOFRIO, EDIF. EXCESCIOR 2DO PISO',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Liga de Quito',
            'stadium_name'  => '',
            'address'       => 'ROBLES # 653 Y AMAZONAS, EDIF. PROINCO CALISTO 3ER PISO OFICINA # 305',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Mushuc Runa S.C.',
            'stadium_name'  => '',
            'address'       => 'MONTALVO ENTRE 12 DE NOVIEMBRE Y JUAN BENIGNO VELA',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'River Plate Ecuador',
            'stadium_name'  => '',
            'address'       => 'KM 14 1/2 VÍA A LA AURORA - SAMBORONDÓN FRENTE A URBANIZACION LA JOYA',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'S.D. Aucas',
            'stadium_name'  => '',
            'address'       => 'VILLALENGUA E1-48 E IÑAQUITO (ESQUINA)',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'S.D. Quito',
            'stadium_name'  => '',
            'address'       => 'AV. CLEMENTE YEROVI N 78 Y AV. DIEGO DE VASQUEZ',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Universidad Católica',
            'stadium_name'  => '',
            'address'       => 'GONZALEZ SUAREZ N27 317 Y SAN IGNACIO, ED.DELTA, PISO 3',
            'city_id'       => 1
        ]);



        /* SERIE B */
        DB::table('clubs')->insert([
            'name'          => 'Olmedo',
            'stadium_name'  => '',
            'address'       => 'VELOZ Y GARCÍA MORENO, EDIF. CORPORACION FINANCIERA NACIONAL',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Azogues',
            'stadium_name'  => '',
            'address'       => 'AYACUCHO Y AZUAY',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Deportivo Quevedo',
            'stadium_name'  => '',
            'address'       => 'CONDOMINIO SIMON BOLIVAR, 5TO PISO, OFICINA 2',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Delfín',
            'stadium_name'  => '',
            'address'       => '109 S/N Y AV. 108',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Espoli',
            'stadium_name'  => '',
            'address'       => '',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Fuerza Amarilla',
            'stadium_name'  => '',
            'address'       => 'KLEBER FRANCO 1117 Y PAEZ Y JUAN MONTALVO',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Gualaceo',
            'stadium_name'  => '',
            'address'       => 'VICENTE PEÑA REYES Y AV.JAIME ROLDOS (EDIF.VASQUEZ - TERCER PISO)',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Imbabura',
            'stadium_name'  => '',
            'address'       => 'Av. Víctor Manuel Peñaherrera s/n y Jaime Roldós',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Liga de Portoviejo',
            'stadium_name'  => '',
            'address'       => 'CALLE SUCRE Y MORALES, ESQUINA. EDIFICIO DÍNAMO, OFICINA 105',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Macará',
            'stadium_name'  => '',
            'address'       => 'CALLE 13 DE ABRIL BLOQUE NO. 2 JUNTO AL PARQUE 12 DE NOVIEMBRE',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Manta F.C.',
            'stadium_name'  => '',
            'address'       => 'CALLE 16 AV. FLAVIO REYES BLOQUE TUALI',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Técnico Universitario',
            'stadium_name'  => '',
            'address'       => 'AV. 12 DE NOVIEMBRE Y MARIETA DE VEINTIMILLA',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'Municipal de Cañar',
            'stadium_name'  => '',
            'address'       => '',
            'city_id'       => 1
        ]);
        DB::table('clubs')->insert([
            'name'          => 'U.T.C.',
            'stadium_name'  => '',
            'address'       => '',
            'city_id'       => 1
        ]);
    }
}
