<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aspirasi extends Model
{
    // Kolom yang boleh diisi
    protected $fillable = ['status', 'id_kategori', 'feedback'];

    // Relasi ke tabel kategori (1 Aspirasi masuk dalam 1 Kategori)
    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori', 'id_kategori');
    }
}
