<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = ['id_katgeori','nama_kategori'];
    protected $table = 'kategoris';
    public function Kategori()
    {
       return $this->hasMAny(Kategori::class,'id_kategori','id'); 
    }
}
