<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level = [
            ['nama_level' => 'Manager',],
            ['nama_level' => 'Staff'],
        ];

        DB::table('level')->insert($level);
    }
}
