<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ORs_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_o_rs')->insert([
            'kilometros' => '154415',
            'fecha_entrada' => '08/06/2022',
            'vehiculo_id' => '1',
            'cliente_id' => '1',
        ]);
    }
}
