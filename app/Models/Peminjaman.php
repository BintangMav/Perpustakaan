<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $fillable = ['id_petugas','id_buku','id_member','tgl_pinjam','jumlah_buku','tgl_kembali'];
    protected $table = 'peminjamen';

    public function Peminjaman()
    {
       return $this->hasMany(Peminjaman::class,'id_peminjaman','id'); 
    }

    public function Buku()
    {
       return $this->belongsTo(Buku::class,'id_buku','id'); 
    }

    public function Member()
    {
       return $this->belongsTo(Member::class,'id_member','id'); 
    }

    public function User()
    {
       return $this->belongsTo(User::class,'id_petugas','id'); 
    }
}
