<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KidSeeder extends Seeder
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
            'nama' => 'Mutiara Rahmanda',
            'guru' => 'Programming Teacher'
            ]
        ];
        DB::table('kids')->insert($data);
    }
}
