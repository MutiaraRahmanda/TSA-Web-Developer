<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;
use App\Models\Divisi;

class Pegawai_Divisi extends Model
{
    use HasFactory;
    protected $table = 'pegawai_divisi';

    // public function pegawai(){
    //     return $this->belongsToMany(Pegawai::class);
    // }

    // public function divisi(){
    //     return $this->belongsToMany(Divisi::class);
    // }
}
