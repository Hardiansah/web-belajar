<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
   
    use HasFactory;

    // 1. Mendefinisikan nama tabel secara eksplisit (karena Laravel otomatis mencari tabel bernama 'kategoris' jika tidak didefinisikan)
    protected $table = 'kategori';

    // 2. Mendefinisikan Primary Key karena kita tidak menggunakan standar bawaan Laravel yaitu 'id'
    protected $primaryKey = 'id_kategori';

    // 3. Mengizinkan semua kolom diisi (Mass Assignment)
    protected $fillable = ['ket_kategori'];
    // Atau jika ingin lebih ketat, gunakan $fillable:
    // protected $fillable = ['id_kategori', 'ket_kategori'];

    // 4. Relasi ke tabel Input Aspirasi (1 Kategori bisa ada di banyak Input Aspirasi)
    public function inputAspirasi()
    {
        // hasMany(NamaModel::class, 'foreign_key', 'local_key')
        return $this->hasMany(InputAspirasi::class, 'id_kategori', 'id_kategori');
    }

    // 5. Relasi ke tabel Aspirasi (1 Kategori bisa ada di banyak detail Aspirasi)
    public function aspirasi()
    {
        return $this->hasMany(Aspirasi::class, 'id_kategori', 'id_kategori');
    }

}
