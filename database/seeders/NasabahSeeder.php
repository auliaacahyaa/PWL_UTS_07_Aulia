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
        $data = [
            [
                'No_Rekening'=> 1111,
                'Nama'=> 'Agung',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Silver',
                'Saldo'=> 1000000,
            ],
            [
                'No_Rekening'=> 2222,
                'Nama'=> 'Aldin',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Gold',
                'Saldo'=> 5000000,
            ],
            [
                'No_Rekening'=> 3333,
                'Nama'=> 'Alfina',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Platinum',
                'Saldo'=> 9000000,
            ],
            [
                'No_Rekening'=> 4444,
                'Nama'=> 'Amal',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Silver',
                'Saldo'=> 1000000,
            ],
            [
                'No_Rekening'=> 5555,
                'Nama'=> 'Aldi',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Gold',
                'Saldo'=> 1000000,
            ],
            [
                'No_Rekening'=> 6666,
                'Nama'=> 'Aryo',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Platinum',
                'Saldo'=> 9000000,
            ],
            [
                'No_Rekening'=> 7777,
                'Nama'=> 'Aulia',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Silver',
                'Saldo'=> 1000000,
            ],
            [
                'No_Rekening'=> 8888,
                'Nama'=> 'Bima',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Gold',
                'Saldo'=> 1000000,
            ],
            [
                'No_Rekening'=> 9999,
                'Nama'=> 'Brian',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Platinum',
                'Saldo'=> 9000000,
            ],
            [
                'No_Rekening'=> 10000,
                'Nama'=> 'Desy',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Silver',
                'Saldo'=> 1000000,
            ],
            [
                'No_Rekening'=> 11000,
                'Nama'=> 'Devi',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Gold',
                'Saldo'=> 1000000,
            ],
            [
                'No_Rekening'=> 12000,
                'Nama'=> 'Dani',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Platinum',
                'Saldo'=> 9000000,
            ],
            [
                'No_Rekening'=> 13000,
                'Nama'=> 'Fina',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Silver',
                'Saldo'=> 1000000,
            ],
            [
                'No_Rekening'=> 14000,
                'Nama'=> 'Hanif',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Gold',
                'Saldo'=> 1000000,
            ],
            [
                'No_Rekening'=> 15000,
                'Nama'=> 'Ikmal',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Platinum',
                'Saldo'=> 9000000,
            ],
            [
                'No_Rekening'=> 16000,
                'Nama'=> 'Kholid',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Silver',
                'Saldo'=> 1000000,
            ],
            [
                'No_Rekening'=> 17000,
                'Nama'=> 'Lian',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Gold',
                'Saldo'=> 1000000,
            ],
            [
                'No_Rekening'=> 18000,
                'Nama'=> 'Maria',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Platinum',
                'Saldo'=> 9000000,
            ],
            [
                'No_Rekening'=> 19000,
                'Nama'=> 'Maulidio',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Silver',
                'Saldo'=> 1000000,
            ],
            [
                'No_Rekening'=> 20000,
                'Nama'=> 'Rafi',
                'Alamat'=> '2G',
                'Jenis_Tabungan'=> 'Gold',
                'Saldo'=> 1000000,
            ],
        ];
        DB::table('nasabahs')->insert($data);
    }
    
}
