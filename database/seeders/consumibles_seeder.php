<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class consumibles_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consumibles')->insert([
            'nombre' => "Mano de obra",
            'cantidad' => "2",
            'preciounidad' => "172",
            'importe' => "244",
            'factura_id' => "1",
        ]);
    }
}
