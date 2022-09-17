<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;


class Level extends Model
{
    use HasFactory;
    protected $table='level';

    public function pegawai(){
        return $this->hasMany(Pegawai::class);
    }
}
