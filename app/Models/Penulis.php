<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;
    protected $fillable = ['id_penulis','nama_penulis'];
    protected $table = 'penulis';
    public function Member()
    {
       return $this->belongsTo(Penulis::class,'id_penulis','id'); 
    }
}