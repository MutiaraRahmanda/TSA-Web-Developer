<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
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
            'image' => 'assets/img/class-4.jpg',
            'title' => 'Programing Class',
            'description' => 'Justo ea diam stet diam ipsum no sit, ipsum vero et et diam ipsum duo et no et, ipsum ipsum erat duo amet clita duo'
            ]
        ];
        DB::table('kelas')->insert($data);
    }
}
