<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisi = [
            [
                'nama_divisi' => 'IT',
                'kehadiran' => 30,
                'rekening' => '354354657',
                'gaji' => '2.500.000',
            ],
            [
                'nama_divisi' => 'Creative',
                'kehadiran' => 30,
                'rekening' => '354355678',
                'gaji' => '2.000.000',
            ],

        ];

        DB::table('divisi')->insert($divisi);
    }
}
