<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Pegawai as Authenticatable;
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
    'level',
    'jabatan',
    'alamat',
    'email',
    'tanggal_lahir',
    'image',
    ];

    public function level(){
        return $this->belongsTo(Level::class);
    }
    public function divisi(){
        return $this->belongsToMany(Pegawai_Divisi::class, 'pegawai_divisi');
    }
}
