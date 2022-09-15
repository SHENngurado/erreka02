<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class manodeobras_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manodeobras')->insert([
            'nombre' => 'Mano de obra',
            'tiempo' => '0.4',
            'euroshora' => '46',
            'importe' => "18.40",
            'factura_id' => "1",
        ]);
    }
}
