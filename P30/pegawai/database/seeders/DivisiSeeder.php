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
            ['divisi' => 'IT',],
            ['divisi' => 'Creative',],
            ['divisi' => 'HRD',],
            ['divisi' => 'Marketing'],
        ];

        DB::table('divisi')->insert($divisi);
    }
}
