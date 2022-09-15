<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class facturas_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facturas')->insert([
            'or_id' => '0',
            'vehiculo_id' => '1',
            'cliente_id' => '1',
            'kms' => '142845',
            'iva' => '21',
            'created_at' => '2022-08-29',
            'facturaterminada' => 'si',
            'cod_factura' => '2022/1555',
            'pagado' => 'si',      ]);
        DB::table('facturas')->insert([
            'or_id' => '1',
            'vehiculo_id' => '1',
            'cliente_id' => '1',
            'kms' => '142845',
            'iva' => '21',
            'created_at' => '2022-08-29',
            'facturaterminada' => 'no',
            'cod_factura' => '2022/1556',
            'pagado' => 'no',      ]);
    }
}
