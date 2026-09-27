<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    // Kolom yang boleh diisi
    protected $fillable = ['nis', 'kelas', ];

    // Relasi ke tabel input_aspirasi (1 Siswa bisa punya banyak Aspriasi)
    public function aspirasi()
    {
        return $this->hasMany(input_aspirasi::class, 'nis', 'nis');
    }

    // Relasi ke tabel Users (1 Siswa punya 1 User/Akun)
    public function user()
    {
        return $this->hasOne(User::class, 'nis', 'nis');
    }
}
