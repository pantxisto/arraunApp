<?php

use Illuminate\Database\Seeder;

class ParametrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parametros')->insert([
            'id_actividad' => 0,
            'name'  => 'Velocidad',
        ]);
 
    }
}
