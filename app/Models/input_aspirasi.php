<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class input_aspirasi extends Model
{
    // Kolom yang boleh diisi
    protected $fillable = ['nis', 'id_kategori', 'lokasi', 'ket'];

    // Relasi ke tabel siswa (1 Aspirasi dibuat oleh 1 Siswa)
    public function siswa()
    {
        return $this->belongsTo(siswa::class, 'nis', 'nis');
    }

    // Relasi ke tabel kategori (1 Aspirasi masuk dalam 1 Kategori)
    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori', 'id_kategori');
    }
}
