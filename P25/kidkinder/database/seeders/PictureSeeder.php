<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PictureSeeder extends Seeder
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
            'image' => 'assets/img/rara-2.jpg',
            'nama' => 'Rara Rahmanda',
            'guru' => 'Mathematics Teacher'
            ]
        ];
        DB::table('pictures')->insert($data);
    }
}
