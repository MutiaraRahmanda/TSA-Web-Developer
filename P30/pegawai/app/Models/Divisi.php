<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;

class Divisi extends Model
{
    use HasFactory;
    protected $table = 'divisi';

    public function pegawai(){
        return $this->belongsToMany(Pegawai::class)->withPivot('gaji');
    }
}
