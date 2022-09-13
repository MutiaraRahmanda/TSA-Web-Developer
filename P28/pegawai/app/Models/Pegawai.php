<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Pegawai extends Model
{
    protected $table='pegawai'; // Eloquent akan membuat model pegawai menyimpan record ditabel pegawai
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'id',
    'nip',
    'nama',
    'jabatan',
    'alamat',
    'email',
    'tanggal_lahir',
    ];
}
