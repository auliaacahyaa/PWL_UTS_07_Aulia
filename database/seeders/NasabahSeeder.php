<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('')->insert([
            'No_rekening'=> 'rek0001',
            'Nama'=> 'Agung',
            'Alamat'=> '2G',
            'Jenis_Tabungan'=> 'Silver',
            'Saldo'=> '1000000'
        ]);
    }
}
