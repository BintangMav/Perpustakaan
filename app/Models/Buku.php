<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = ['id_buku','kode_buku', 'judul_buku','tahun_buku','kategori_buku','stok_buku'];
    protected $table = 'bukus';

    public function Buku()
    {
       return $this->hasMany(Buku::class,'id_buku','id'); 
    }
    public function Penulis()
    {
       return $this->belongsTo(Penulis::class,'id_penulis','id'); 
    }
    public function Kategori()
    {
       return $this->belongsTo(Kategori::class,'id_kategori','id'); 
    }
}
